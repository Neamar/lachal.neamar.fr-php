<?php
if(isset($_GET['Titre']))
{
	header('Location:https://lachal.neamar.fr/Hist-' . $_GET['ShowOnly']);
	exit();
}


$UseMath=true;//Parser les balises <math>

if(!isset($_GET['ShowOnly']))
{
	if(isset($_GET['Expressions']))
	{
		$titre="Les expressions de M Lachal";
		unset($UseMath);
	}
	else
		$titre="Les histoires mathématiques de M Lachal";
}
else
	$titre=stripslashes($_GET['Titre']);
include('menu.php');

if(isset($_POST['Expr']))
{
	$_POST['Expr'] = nl2br($_POST['Expr']);
	mysql_query('INSERT INTO Lachal_Expression VALUES(\'\',\'' . $_POST['Expr'] . '\',\'0\',\'1\')') or die(mysql_error());
}

$WhereClause='Accepte=\'1\' ';
if(isset($_GET['Histoire']))
	$WhereClause .='AND Is_Story=\'1\' ';
if(isset($_GET['Expressions']))
	$WhereClause .='AND Is_Story=\'0\' ';
if(isset($_GET['Expressions']) && isset($_GET['Histoire']))
	$WhereClause='Accepte=\'1\' ';
if(isset($_GET['ShowOnly']))
	$WhereClause .=' AND ID=\'' . $_GET['ShowOnly'] . '\'';

echo('SELECT ID,Expression,Is_Story FROM Lachal_Expression WHERE ' . $WhereClause . ' ORDER BY ID');
die();

$expr=mysql_query('SELECT ID,Expression,Is_Story FROM Lachal_Expression WHERE ' . $WhereClause . ' ORDER BY ID') or die(mysql_error());
mysql_close();

if(!isset($_GET['ShowOnly']))
{
	if(isset($_GET['Expressions']))
	{
	?>
	<h1>Les expressions truculentes</h1>
	<?php
	}
	else
	{
	?>
	<h1>Les histoires étiologiques</h1>
	<p>Vous n'y comprenez rien aux maths ? Voilà qui devrait rendre le tout un peu moins abstrait... ou en tout cas, forcément plus drôle !</p>
	<?php
	}
}
	echo '<ul>';
	while($donnees = mysql_fetch_assoc($expr))
	{
		if($donnees['Is_Story']=='1')
		{

			$Story=explode('<ENDtitre',$donnees['Expression']);
			//Donner un titre
			Typo::setTexte($Story[1]);
			$donnees['Expression'] = '<fieldset><legend><a href="<nolink>' . $donnees['ID'] . '-' . $Story[0] . '</nolink>"><nolink>' . $Story[0] . '</nolink></a></legend>' . "\n" . Typo::Parse() . '</fieldset>';
			if(isset($_GET['ShowOnly']))
				$titre=$Story[0];
		}
		echo '<li style="margin-bottom:50px;">' . $donnees['Expression'] . '</li>';
	}
echo '</ul>';
?>
</div>
</body>
</html>
