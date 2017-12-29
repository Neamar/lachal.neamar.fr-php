<?php
function StripCarac($Texte)
{	//Remplacer les caractères accentués.
	return str_ireplace('ü','u',str_ireplace('ï','i',str_ireplace('ê','e',str_ireplace('è','e',str_ireplace('é','e',str_ireplace(' ','_',strtolower($Texte)))))));
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

include('../ConnectBDD.php');
//Protéger les données
$message='';

$date = date('d/m/Y');
// if(isset($_POST['Mot']))
// 	$_POST['Mot'] = htmlspecialchars($_POST['Mot']);
// if(isset($_POST['Lien']))
// 	$_POST['Lien'] = htmlspecialchars($_POST['Lien']);
// if(isset($_POST['Definition']))
// 	$_POST['Definition'] = htmlspecialchars($_POST['Definition']);
// if(isset($_POST['Synonyme']))
// 	$_POST['Synonyme'] = htmlspecialchars($_POST['Synonyme']);
// if(isset($_POST['Exemple1']))
// 	$_POST['Exemple1'] = htmlspecialchars($_POST['Exemple1']);
// if(isset($_POST['Exemple2']))
// 	$_POST['Exemple2'] = htmlspecialchars($_POST['Exemple2']);
//Traiter les ajouts et les modifs
if(isset($_POST['Mot']))
{
	mysql_query('INSERT INTO Lachal_Citations VALUES (\'\',\'0\',\'' . $_POST['Mot'] . '\',\'' . $_POST['Lien'] . '\',\'' . $_POST['Definition'] . '\',\'' . $_POST['Synonyme'] . '\',\'' . $_POST['Exemple1'] . '\',\'' . $_POST['Exemple2'] . '\',CURDATE())') or die(mysql_error());
	$message='Merci pour votre ajout. Il est visible dès maintenant et sera vérifié... quand j\'en aurais le temps.';
}
if(isset($_POST['AjoutExemple']))
{
	mysql_query('UPDATE Lachal_Citations SET  Exemple2=\'' . $_POST['AExemple2'] . '\' WHERE Mot = \'' . $_POST['AjoutExemple'] . '\'') or die(mysql_error());
	$message='Merci pour votre modification. Il est visible dès maintenant et sera vérifié...quand j\'en aurais le temps.';
}
header('Location:' . Encode($_POST['Mot']));
?>
