<?php
$Titre='Quelques images du prof en action !';
include('menu.php');
echo 'IMAGES indisponibles pour le moment, en attente....';
exit;
?>
<table>
<?php
for($i=1;$i<=16;$i++)
{
	echo '<tr ';
	if($i % 2 == 0)
		echo ' class="blanc"';
	else
		echo ' class="bleu"';
	echo '><td class="exemple"><img alt="M Lachal s\'est bien amusé" src="Pics/IMG/' . $i . '.jpg" /></td></tr>';
}
?>
<tr><td class="exemple"><img alt="M Lachal s\'est bien amusé" src="Pics/IMG/mickeyandcoenmath.gif" /></td></tr>
</table>
</body>
</html>