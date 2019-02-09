<?php
define('USE_CACHE',true);
//define('USE_CACHE',false);

ini_set('memory_limit','32M');


//Gestion du cache mémoire.
function Cache($buffer)
{
	$Cache='/tmp/cache-' . substr(str_replace('/','-',$_SERVER['REQUEST_URI']),1);
	file_put_contents($Cache,$buffer);
	return $buffer;
}

$Cache='/tmp/cache-' . substr(str_replace('/','-',$_SERVER['REQUEST_URI']),1);
if(USE_CACHE && !file_exists($Cache))
{
	ignore_user_abort(true);//Éviter que l'utilisateur puisse interrompre la connexion, ce qui empêcherait l'enregistrement du cache.
	ob_start('Cache');
}
elseif(USE_CACHE)
{
	echo file_get_contents($Cache);
	exit();
}







//lancer le tampon
ob_start('Parseur');

//Personnalisation du menu :
$AddLine = '<link rel="alternate" type="application/rss+xml" title="Derniers ajouts sur le dictionnaire" href="rss.php" />
<link rel="icon" type="image/x-icon" href="/favicon.ico" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /><![endif]-->
<script type="text/javascript" src="/JS.js" async></script>';

if(isset($canonical)) {
	$AddLine .= '<link rel="canonical" href="https://lachal.neamar.fr/' . $canonical . '" />';
}

$menus = array ("Accueil","Dictionnaire","Rubriques");
$NoGift = 1;
$NoWelcomeCenter = 1;
$GoogleSearch ="4506683949348156:a3wkew-rnji";
$titreSVG=$titre;
$titre="<TITRE>"; //Le titre sera remplacé par la tamporisation de sortie
$description="<DESC>";
$EnlargeGroupConcat=true;
include('./header.php');

$titre=$titreSVG;
$description='';

//Charger le Typographe
include('./Typo.php');


function LinkRemover($Texte)
{
	$Texte[1]=preg_replace('#(.*)\<a.+\>(.+)\<\/a\>#iU','$1$2$3',$Texte[1]);
	return $Texte[1];
}
function Parseur($buffer)
{//fonction lancée à la fin du script
	global $Patterns,$UseMath,$titre,$description;

	$compteur=0;
 	if(strlen($buffer)<90000)
		$buffer = preg_replace(array_keys($Patterns),array_values($Patterns),$buffer,-1,$compteur);
 	unset($Patterns);

	if(isset($UseMath) && $UseMath==true) {
		$buffer = preg_replace('#\<math\>(.+)\<\/math\>#isU','\\($1\\)',$buffer);
	}

	//Et enfin, supprimer les liens à l'intérieur des balises <nolink> :
	//$buffer=preg_replace('#\<nolink\>(.*)\<a.+\>(.+)\<\/a\>(.*)\<\/nolink\>#iU', '$1$2$3', $buffer);//Ne fonctionne pas si plusiseurs ancres dans une balise nolink.
	$buffer=preg_replace_callback('#\<nolink\>(.+)\<\/nolink\>#iU',"LinkRemover",$buffer);
	//Puis supprimer les nolink restants.
	$buffer=str_replace(array('<nolink>','</nolink>'),'',$buffer);

	$buffer=str_replace(array('<TITRE>','<DESC>'),array($titre,''),$buffer);
	unset($titre);
	unset($Description);

	$buffer=str_ireplace('(cf. Histoires)','(<a class="Ancre" href="//lachal.neamar.fr/Histoire.php">cf. Histoires</a>)',$buffer);
	$buffer=str_ireplace('(cf. Correspondance)','(<a class="Ancre" href="//lachal.neamar.fr/Correspondance.php">cf. Correspondance</a>)',$buffer);

	return $buffer . "\n<!--$compteur mots complexes parsés.-->";
}

function StripCarac($Texte)
{	//Remplacer les caractères accentués.
	$Acc=array('ô','ü','î','ï','é','è','ê','à','â',' ');
	$Rep=array('o','u','i','i','e','e','e','a','a','_');
	return str_ireplace($Acc,$Rep,strtolower($Texte));
}
function Encode($Texte)
{

	$Texte=StripCarac($Texte);

	$Texte=str_replace(","," ",$Texte);
	$Texte=str_replace(" ","_",$Texte);
	$Texte=str_replace(".","-",$Texte);
	$Texte=strtoupper($Texte{0}) . strtolower(substr($Texte,1));
	return $Texte;
}

//Faire la liste des mots
$mot=mysql_query('SELECT Mot FROM Lachal_Citations ORDER BY Mot') or die(mysql_error());
$Patterns=array();
$date = date('d/m/Y');
$nbMots=mysql_num_rows($mot);
$i=0;
while($current=mysql_fetch_array($mot))
{
		$Patterns['#(\W)(' . preg_quote($current['Mot']) . '\w*)(\W)#iU']='$1<a class="Ancre" href="' . Encode($current['Mot']) . '">$2</a>$3';
		$i++;
}
unset($mot);
?>
