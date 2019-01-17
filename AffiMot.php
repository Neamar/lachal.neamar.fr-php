<?php
function Decode($Texte)
{
	$Texte=str_replace("_"," ",$Texte);
	$Texte=str_replace("-",".",$Texte);
	return $Texte;
}
if($_GET['ShowOnly']!=strtoupper($_GET['ShowOnly']{0}) . strtolower(substr($_GET['ShowOnly'],1)))
{
	//Bien formater les URL
	header('Location:' . (strtoupper($_GET['ShowOnly']{0}) . strtolower(substr($_GET['ShowOnly'],1))),False,301);
	exit();
}

//Remettre le mot sous forme correcte.
$_GET['ShowOnly']=Decode($_GET['ShowOnly']);

$titre=$_GET['ShowOnly'] . ' : Définition, synonymes et exemples d\'utilisation';
$canonical = '<nolink>' . strtoupper($_GET['ShowOnly']{0}) . strtolower(substr($_GET['ShowOnly'],1)) . '</nolink>';
include("menu.php");

$CurrentWord=mysql_fetch_assoc(mysql_query('SELECT Mot,Definition,Synonyme,Lien, GROUP_CONCAT(Categorie SEPARATOR \' | \') AS Categorie,Exemple1,Exemple2
FROM Lachal_Citations
LEFT JOIN Lachal_Relations ON Parent=Lachal_Citations.ID
WHERE Mot = "' . $_GET['ShowOnly'] . '"
GROUP BY Mot
ORDER BY Mot
'));

if($CurrentWord==array())
{
	//Gestion des erreurs
	header("HTTP/1.0 404 Not Found");
	$titre="404 : Mot introuvable !";
	echo '<p class="flottant"><img src="Pics/Icones/NotFound.png" alt="Pas trouvé !" /></p>';
	echo '<h1>Erreur</h1>';
	echo '<p>Le mot que vous recherchez est malheureusement introuvable.<br /><a href="index.php">Retour à la liste globale</a></p>';
	echo '<h2>Mots similaires</h2>';
	$Approx=mysql_query('SELECT Mot FROM Lachal_Citations
WHERE Mot Like "' . $_GET['ShowOnly'] . '%"
OR SOUNDEX(Mot) =  SOUNDEX(\'' . $_GET['ShowOnly'] . '\')
ORDER BY Mot');
	echo '<p>Peut être vouliez-vous l\'un des mots suivants :</p>';
	echo '<ul>';
	if(mysql_num_rows($Approx)==0)
		echo '<li>Aucun mot semblable</li>';

	while($mot=mysql_fetch_assoc($Approx))
	{
		echo '<li>' . $mot['Mot'] . '</li>' . "\n";
	}
	echo '</ul>';
}
else
{
?>
<h1>Définition, synonymes et exemples d'utilisation du mot « <?php echo $CurrentWord['Mot']; ?> »</h1>
<dl id="Definitions">
<?php
$titre=$CurrentWord['Mot'] . ' : Définition, synonymes et exemples d\'utilisation';
echo '	<dt class="bleu"><nolink>' . $CurrentWord['Mot'] . '</nolink>';
if($CurrentWord['Categorie']!='')
	echo "<em>Catégorie : " . $CurrentWord['Categorie'] . '</em>';
echo '</dt>' . "\n";

Typo::setTexte($CurrentWord['Definition']);
echo '	<dd class="AloneDefinition"><h2>Définition</h2>' . "\n";
echo '	' . Typo::Parse() . "\n";

echo "	<h2>Synonymes :</h2>" . "\n";
echo '	<ul>' . "\n";
$Synonymes=explode(',',$CurrentWord['Synonyme']);
foreach($Synonymes as $Synonyme)
	echo '		<li>' . $Synonyme . '</li>' . "\n";
echo '	</ul>' . "\n";

echo "	<h2>Exemples d'utilisation</h2>\n";
echo '	<ul class="Exemple">' . "\n";
echo '		<li class="Quote">' . $CurrentWord['Exemple1'] . '</li>' . "\n";
if($CurrentWord['Exemple2'] !='')
echo '		<li class="Quote">' . $CurrentWord['Exemple2'] . '</li>' . "\n";
echo '	</ul>' . "\n";

if(strpos($CurrentWord['Lien'],'wiki')===false)
	echo '<p>Pour plus d\'informations : <a href="<nolink>' . htmlentities($CurrentWord['Lien']) . '</nolink>"><nolink>' . $CurrentWord['Mot'] . '</nolink></a></p>';
else
	echo '<p>Pour plus d\'informations : <a rel="nofollow" href="<nolink>' . htmlentities($CurrentWord['Lien']) . '</nolink>"><nolink>' . $CurrentWord['Mot'] . '</nolink></a></p>';//Wikipedia applique un nofollow sur ses liens, il n'y a pas de raisons de leur donner du PageRank ! Faut pas pousser Mamie dans les orties...
echo '	</dd>' . "\n\n\n";
echo '</dl>' . "\n";

Typo::setTexte($CurrentWord['Definition']);
$description='Définition de « ' . strtolower($CurrentWord['Mot']) . ' » : ' . Typo::parseLinear();//Pour les metas
?>
<p class="Legal"></p>
<?php
}
?>
</div>
</body>
</html>
