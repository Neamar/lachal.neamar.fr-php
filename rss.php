<?php echo '<?xml version="1.0" encoding="ISO-8859-1" ?>'; ?>
<rss version="2.0">
<channel>
<title>Le petit Lachal non-illustre</title>
<link>https://lachal.neamar.fr</link>
<description>Les derniers ajouts du dictionnaire</description>
<language>fr</language>
<?php
function StripCarac($Texte)
{	//Remplacer les caractères accentués.
$Acc=array('ô','ü','î','ï','é','è','ê','à',' ');
$Rep=array('o','u','i','i','e','e','e','a','_');
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
	include('./ConnectBDD.php');
	$donnees=mysql_query('SELECT * FROM Lachal_Citations ORDER BY ID DESC LIMIT 10') or die(mysql_error());
	mysql_close();
	while($current = mysql_fetch_array($donnees))
	{
		echo '<item>' . "\n"  . '<title>' . $current['Mot'] . '</title>' . "\n" . '<author>Groupe 12</author>' . "\n" .  '<link>https://lachal.neamar.fr/' . Encode($current['Mot']) . '</link>' . "\n" . '<description>' . $current['Definition'] . '</description>' . "\n" . '</item>';
	}
?>
</channel>
</rss>
