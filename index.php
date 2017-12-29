<?php
$titre='Le dictionnaire dédié aux mots de M. Lachal !';
if(isset($_GET['ShowOnlyLetter']))
	$titre.='(mots commencant par ' . $_GET['ShowOnlyLetter'] . ')';

if(isset($_GET['Categorie']))
{
	$_GET['Categorie']=str_replace('_',' ',$_GET['Categorie']);
	$titre.='(Catégorie : ' . $_GET['Categorie'] . ')';
}

include("menu.php");

$Condition=($_GET['Categorie']=='');
if($Condition=='')
	$Condition='0';

$Liste=mysql_query('SELECT Mot,Definition,GROUP_CONCAT(Categorie SEPARATOR \' | \') AS Categories
FROM Lachal_Citations
LEFT JOIN Lachal_Relations ON Parent=Lachal_Citations.ID
WHERE Mot LIKE "' . $_GET['ShowOnlyLetter'] . '%"
GROUP BY Mot
HAVING Categories LIKE "%' . $_GET['Categorie'] . '%" OR (ISNULL(Categories) AND ' . $Condition . ')
ORDER BY Mot
')or die(mysql_error());
?>

<h1>Traduction Lachal/Français : <?php echo $nbMots; ?> mots</h1>
<?php
if($_GET['Categorie']=="Rhetorique")
	$_GET['Categorie']="Rhétorique";

if(isset($_GET['Categorie']))
	echo '<h2>Catégorie : ' . $_GET['Categorie'] . '</h2>';
?>
<p>La définition jointe est incomplète.<br />
Cliquez sur le mot pour ouvrir une nouvelle page affichant plus d'informations et des exemples.</p>
<?php
$couleurs=array("bleu","blanc");
$i=0;
$PremiereLettre=":";
while($CurrentWord=mysql_fetch_assoc($Liste))
{
	if(StripCarac(strtolower($CurrentWord['Mot']{0}))!=strtolower($PremiereLettre))
	{
		if($PremiereLettre!=':') //Ne pas fermer la balise la première fois
			echo '</dl>' . "\n";
		$PremiereLettre=StripCarac($CurrentWord['Mot']{0});
		echo '<h3 class="Lettre"><a href="' . $PremiereLettre . '">' . $PremiereLettre . '</a>' . '</h3>' . "\n" . '<dl>' . "\n";
	}
	$i=($i+1)%2;
	Typo::setTexte($CurrentWord['Definition']);
	echo '	<dt class="' . $couleurs[$i] . '"><a href="<nolink>' . Encode($CurrentWord['Mot']) . '</nolink>"><nolink>' . $CurrentWord['Mot'] . '</nolink></a>';
	if($CurrentWord['Categories']!='')
		echo "<em><nolink>Catégorie : " . $CurrentWord['Categories'] . '</nolink></em>';
	echo '</dt>' . "\n";
	echo '		<dd>' . Typo::parse() . '</dd>' . "\n\n\n";;
}
?>
</dl>

<p class="Legal"></p>
</div>
</body>
</html>