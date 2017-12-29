<?php
if(isset($_GET['R']))
{
	header('Location:Defi-' . $_GET['ShowOnly']);
	exit();
}

$titre="D�fiez-le !";
$UseMath=true;
include('menu.php');?>
<p>� l'aide de votre math�matico-coach, plus jamais de pannes s�ches !</p>
<?php
if(isset($_GET['ShowOnly']))
{
	$Defi=mysql_fetch_assoc(mysql_query('SELECT ID,Titre, Probleme, Solution FROM Lachal_Defis WHERE ID=' . $_GET['ShowOnly']));

	$titre=$Defi['Titre'];
	?>

	<div id="Flotteur">
	<p>Sommaire :</p>
	<ul>
		<li><a href="#Probleme">Le probl�me</a></li>
		<li><a href="#Solution">La solution</a></li>
	</ul>
	</div>

	<?php
	Typo::setTexte($Defi['Probleme']);
	echo '<h1><a href="Defi-' . $Defi['ID'] . '-' . $Defi['Titre'] . '">' . $Defi['Titre'] . '</a></h1>' . "\n";
	echo '<h2 id="Probleme">Exposition du probl�me</h2>' . "\n";
	echo '<fieldset style="background-color:white; clear:both;">' . Typo::Parse() . '</fieldset>' . "\n";

	Typo::setTexte($Defi['Solution']);
	echo '<h2 id="Solution">La solution</h2>' . "\n";
	echo '<fieldset style="background-color:white;">' . Typo::Parse() . '</fieldset>' . "\n";
}
else
{?>
	<p>Voici la liste des d�fis disponibles pour l'instant :</p>
	<ul>
	<?php
	$Defis=mysql_query('SELECT ID,Titre FROM Lachal_Defis');
	while($Defi=mysql_fetch_assoc($Defis))
	{
		echo '<li><a href="Defi-' . $Defi['ID'] . '-' . $Defi['Titre'] . '">' . $Defi['Titre'] . '</a></li>' . "\n";
	}
	?>
	</ul>
<?php
}
?>

<!--<fieldset style="border: 1px solid black; background-color: white;">
<legend>Titeuf, le retour...</legend>
<h2>Pr�sentation du probl�me</h2>
<p>Titeuf et sa copine Nadia sont partis � Donf rejoindre leur pote Vomito. Mais le d�tail que nous avions omis de pr�ciser, c'est qu'� Donf, c'est �has been�. Titeuf redoute donc les �chauffour�es
 sur sa belle voiture rouge Ferarri.<br />
Vomito, toujours en proie � quelques probl�mes de cacostomie (i.e. mieux vaut instaurer un gros p�rim�tre de s�curit� avec lui dedans...) a une solution pour �viter � la belle auto de Titeuf un gigantesque autodaf� par les pyromanes du secteur.<br />
Avertissement au lecteur : Ce paragraphe n'est pas destin� aux �mes sensibles et aux c&oelig;urs chastes ! Vomito propose donc...de se l�cher, enfin bref de cr�pir la voiture : �L�, je te garantis, personne n'y touchera...�<br />
� ces mots, la plume de Titeuf commence � chavirer, Nadia rentre dans une p�moison absolument transcendantale, et Vomito, face � cette r�action, se dit qu'il lui faut revenir � r�sipiscence en proposant une solution plus cr�dible.<br />
Il leur propose donc cette devinette :<br />
�Si tu me dis la longueur minimale dont tu as besoin pour garer ta voiture sans l'�rafler, je te trouve un petit garage pour la prot�ger des �chauffour�es
 et autres vandalismes...�.<br />
Voil� notre probl�me !</p>
<hr />
<h2>R�solution</h2>
<p style="float:left; background-color:black;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf1.png" /></p>
<p>Mettons donc ce probl�me en �quation : nous avons donc une voiture (une Smart couleur Ferarri, n'oubliez pas que Titeuf n'a eu son permis qu'� la 5<sup>�me</sup> fois...on ne lui a donc pas confi� n'importe quelle voiture !)
Nous avons aussi une porte de garage, qui doit bien s�r �tre ferm�e. Les garages � Donf sont tous les m�mes : une porte coulissante qui descend, partant de l'horizontale pour finir � la verticale en suivant une courbe impos�e par les rails de glissements.</p>
<p>Le probl�me est donc de trouver la longueur � ajouter <strong>apr�s</strong> la voiture pour pouvoir fermer le garage sans arracher l'arri�re de la Smart.</p>
<p style="clear:both;">Reprenons le dessin sans la Smart :</p>
<p style="float:left; background-color:black;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf2.png" /></p>
<p>On obtient bien une courbe, qui est tangente � tous les segments de droite qui repr�sentent la porte mobile.</p>
<p>Quelle est cette courbe ?<br />
R�ponse a : Un cercle ?<br />
R�ponse b : Une exponentielle ?<br />
R�ponse c : Une racine carr�e ?<br />
R�ponse d : Une inverse ?<br />
Quoi d'autre ? On a d�j� dans cette liste cha�nette, parabole, hyperbole, rajoutons aussi ellipse et logarithme afin d'�tre plus exhaustif.</p>
Et la bonne r�ponse, c'est...autre chose !</p>
<p>Mod�lisons le probl�me, mais dans l'autre sens cette fois, car Donf est une ville de miroirs. Nous allons donc faire une figure �nantiomorphe � la pr�c�dente. (i.e. sym�trique)<br />
<p style="float:left; background-color:black;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf3.png" /></p>
Nous allons nous int�resser � un segment repr�sentant, faut-il le rappeler, la porte. Comme longueur, nous prendrons 1, et comme angle, t, qui sera variable, entre 0 et <math>\frac{\pi}{2}</math>.</p>
<p>�crivons l'�quation de cette droite � l'angle t : m�me Titeuf saurait faire ! (on prend a et b les hauteurs relatives)<br />
On obtient directement <math>\frac{x}{a} + \frac{y}{b} = 1</math> : si on est en a, on a bien >y=0 et x=1, si on est en b, on a y=1 et x=0.<br />
Comme a est sur l'abscisse, on a a = cos(t).<br />
Comme b est sur l'ordonn�e, on a b = sin(t).<br />
La droite a donc pour �quation <math>\frac{x}{\cos(t)} + \frac{y}{\sin(t)} = 1</math>.<br />
Comme nous sommes peu familiers de cette �criture, ramenons le tout en y : <math>y = \sin(t) - x\tan(t)</math> (faut-il rappeler que <math>\frac{\sin(\theta)}{\cos(\theta)} = \tan(\theta)</math> ?)<br />
Nous sommes donc en possession de l'�quation de la droite mobile ! Reste � trouver la courbe d�crite par les tangentes...il suffit de prendre un x et de chercher &phi;(x)</math>. (je rappele que l'on travaille actuellement sur une figure �nantiomorphe, la voiture devra donc �tre au dessus). Pour &phi;(x), nous allons donc prendre le maximum de toutes ces droites. (la borne sup�rieure des �quations trouv�es quand t varie entre <math>[0;\frac{\pi}{2}]</math>, ce qui revient � cos(t) = x (l'emplacement de la voiture), ou encore t = arccos(x), soit t &isin; [0;arccos(x)]).<br />
<math>\Gamma(t) = \sin(t) - x\tan(t)</math> et <math>\Gamma'(t) = \cos(t) - \frac{x}{\cos ^2(t)}</math>.
La d�riv�e s'annule pour x=cos<sup>3</sup>(t). Mais on cherche t ! Donc <math>t_0 = \arccos(\sqrt[3]{x})</math>, qui est plus petit que arccos(x), ce qui semble correct.<br />
On trouve donc notre valeur pour <math>\sin(t_0)-\cos ^3(t_0)*\tan(t_0) = \sin(t_0)-\cos ^2(t_0)*\sin(t_0) = \sin(t_0)(1-\cos ^2(t_0)) = \sin ^3(t_0) = \sin ^3(\arccos(\sqrt[3]{x})) = \phi(x)</math>.<br />
Comme tout le monde devrait le savoir, <math>\sin(\arccos(z))=\sqrt{1-z^2}</math>, d'o� <math>\phi(x)={(1-x^{\frac{2}{3}})}^{\frac{3}{2}}</math>. Voil� la courbe d�crite par la porte ! (toujours de fa�on �nantiomorphe !)
<p style="text-align:center;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf4.png" /></p>
<p>Moralit� : ce n'est pas vraiment un cercle, ce n'est pas vraiment une exponentielle, ce n'est pas vraiment une racine carr�e (on a bien des racines, mais elles sont cubiques). Quant � l'inverse...d�finitivement hors sujet !</p>
<p>Cela dit, nous avons l� une �quation cart�sienne pas tr�s parlante. Mais si on utilise une repr�sentation param�trique, (avec <math>t_0</math> en variable, profitons de cette parenth�se pour rappeler l'�quation d'un cercle : <math>y=\sqrt{1-x^2}</math>, une fa�on d'�luder ces racines carr�es �tant de poser x=cos(t) et y=sin(t)).
Dans notre cas,<br />
<math>x=\cos ^3(t)</math> et <math>y=\sin ^3(t)</math>.</p>
<p>soit une repr�sentation param�trique telle que <math>\phi(x)=\sin(t)-\cos ^3(t)*\tan(t)</math>, <math>t \in [0,\frac{\pi}{2}]</math>.<br />
Comme chacun sait, le cosinus se lin�arise : <math>\cos ^3(t) = \frac{\cos(3t}+3\cos(t)}{4}</math>.<br />
De m�me pour sinus...</p>
<p>Bon, vous voyez o� on en arrive ! Passons en complexes...</p>
<math>z = x+iy</math>, avec la notation exponentielle : <math>\frac{3}{4}e^{it} + \frac{1}{4}e^{-3it}</math>,qui est l'�quation...d'une hypocyclo�de ! (comme des oreilles de Mickey qui lui seraient pouss�es � l'int�rieur de la t�te...ce qui demande un peu d'imagination).<br />
Ici, il s'agit d'une hypocyclo�de � 4 points de rebroussements : c'est � dire qu'on fait roule r� l'int�rieur d'un cercle de rayon r un cercle de rayon <math>\frac r4</math>, et qu'on observe la courbe d�crite par un point sur le petit cercle : cela s'appelle une astro�de.</p>
<p>Mais ! Quid des tangentes ? Allez hop ! Un petit DL...</p>
<hr />
<h2>En conclusion</h2>
Nous avons donc l'objet insipide (la voiture de Toto, pour ceux qui auraient d�j� oubli�s...), de hauteur l, et le garage de hauteur h.
Rappelons notre �quation : <math>y ={(1-x^{\frac{2}{3}})}^{\frac{3}{2}}</math>, soit <math>x=\sqrt{(l^{\frac{2}{3}}-(l-h)^{\frac{2}{3}})}</math>. Voil� la r�ponse que Titeuf devra donner s'il veut voir sa superbe Smart survivre un nycth�m�re de plus...</p>
</fieldset>-->
</div>
</body>
</html>
