<?php
if(isset($_GET['R']))
{
	header('Location:Defi-' . $_GET['ShowOnly']);
	exit();
}

$titre="Défiez-le !";
$UseMath=true;
include('menu.php');?>
<p>À l'aide de votre mathématico-coach, plus jamais de pannes sèches !</p>
<?php
if(isset($_GET['ShowOnly']))
{
	$Defi=mysql_fetch_assoc(mysql_query('SELECT ID,Titre, Probleme, Solution FROM Lachal_Defis WHERE ID=' . $_GET['ShowOnly']));

	$titre=$Defi['Titre'];
	?>

	<div id="Flotteur">
	<p>Sommaire :</p>
	<ul>
		<li><a href="#Probleme">Le problème</a></li>
		<li><a href="#Solution">La solution</a></li>
	</ul>
	</div>

	<?php
	Typo::setTexte($Defi['Probleme']);
	echo '<h1><a href="Defi-' . $Defi['ID'] . '-' . $Defi['Titre'] . '">' . $Defi['Titre'] . '</a></h1>' . "\n";
	echo '<h2 id="Probleme">Exposition du problème</h2>' . "\n";
	echo '<fieldset style="background-color:white; clear:both;">' . Typo::Parse() . '</fieldset>' . "\n";

	Typo::setTexte($Defi['Solution']);
	echo '<h2 id="Solution">La solution</h2>' . "\n";
	echo '<fieldset style="background-color:white;">' . Typo::Parse() . '</fieldset>' . "\n";
}
else
{?>
	<p>Voici la liste des défis disponibles pour l'instant :</p>
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
<h2>Présentation du problème</h2>
<p>Titeuf et sa copine Nadia sont partis à Donf rejoindre leur pote Vomito. Mais le détail que nous avions omis de préciser, c'est qu'à Donf, c'est «has been». Titeuf redoute donc les échauffourées
 sur sa belle voiture rouge Ferarri.<br />
Vomito, toujours en proie à quelques problèmes de cacostomie (i.e. mieux vaut instaurer un gros périmètre de sécurité avec lui dedans...) a une solution pour éviter à la belle auto de Titeuf un gigantesque autodafé par les pyromanes du secteur.<br />
Avertissement au lecteur : Ce paragraphe n'est pas destiné aux âmes sensibles et aux c&oelig;urs chastes ! Vomito propose donc...de se lâcher, enfin bref de crépir la voiture : «Là, je te garantis, personne n'y touchera...»<br />
À ces mots, la plume de Titeuf commence à chavirer, Nadia rentre dans une pâmoison absolument transcendantale, et Vomito, face à cette réaction, se dit qu'il lui faut revenir à résipiscence en proposant une solution plus crédible.<br />
Il leur propose donc cette devinette :<br />
«Si tu me dis la longueur minimale dont tu as besoin pour garer ta voiture sans l'érafler, je te trouve un petit garage pour la protéger des échauffourées
 et autres vandalismes...».<br />
Voilà notre problème !</p>
<hr />
<h2>Résolution</h2>
<p style="float:left; background-color:black;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf1.png" /></p>
<p>Mettons donc ce problème en équation : nous avons donc une voiture (une Smart couleur Ferarri, n'oubliez pas que Titeuf n'a eu son permis qu'à la 5<sup>ème</sup> fois...on ne lui a donc pas confié n'importe quelle voiture !)
Nous avons aussi une porte de garage, qui doit bien sûr être fermée. Les garages à Donf sont tous les mêmes : une porte coulissante qui descend, partant de l'horizontale pour finir à la verticale en suivant une courbe imposée par les rails de glissements.</p>
<p>Le problème est donc de trouver la longueur à ajouter <strong>après</strong> la voiture pour pouvoir fermer le garage sans arracher l'arrière de la Smart.</p>
<p style="clear:both;">Reprenons le dessin sans la Smart :</p>
<p style="float:left; background-color:black;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf2.png" /></p>
<p>On obtient bien une courbe, qui est tangente à tous les segments de droite qui représentent la porte mobile.</p>
<p>Quelle est cette courbe ?<br />
Réponse a : Un cercle ?<br />
Réponse b : Une exponentielle ?<br />
Réponse c : Une racine carrée ?<br />
Réponse d : Une inverse ?<br />
Quoi d'autre ? On a déjà dans cette liste chaînette, parabole, hyperbole, rajoutons aussi ellipse et logarithme afin d'être plus exhaustif.</p>
Et la bonne réponse, c'est...autre chose !</p>
<p>Modélisons le problème, mais dans l'autre sens cette fois, car Donf est une ville de miroirs. Nous allons donc faire une figure énantiomorphe à la précédente. (i.e. symétrique)<br />
<p style="float:left; background-color:black;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf3.png" /></p>
Nous allons nous intéresser à un segment représentant, faut-il le rappeler, la porte. Comme longueur, nous prendrons 1, et comme angle, t, qui sera variable, entre 0 et <math>\frac{\pi}{2}</math>.</p>
<p>Écrivons l'équation de cette droite à l'angle t : même Titeuf saurait faire ! (on prend a et b les hauteurs relatives)<br />
On obtient directement <math>\frac{x}{a} + \frac{y}{b} = 1</math> : si on est en a, on a bien >y=0 et x=1, si on est en b, on a y=1 et x=0.<br />
Comme a est sur l'abscisse, on a a = cos(t).<br />
Comme b est sur l'ordonnée, on a b = sin(t).<br />
La droite a donc pour équation <math>\frac{x}{\cos(t)} + \frac{y}{\sin(t)} = 1</math>.<br />
Comme nous sommes peu familiers de cette écriture, ramenons le tout en y : <math>y = \sin(t) - x\tan(t)</math> (faut-il rappeler que <math>\frac{\sin(\theta)}{\cos(\theta)} = \tan(\theta)</math> ?)<br />
Nous sommes donc en possession de l'équation de la droite mobile ! Reste à trouver la courbe décrite par les tangentes...il suffit de prendre un x et de chercher &phi;(x)</math>. (je rappele que l'on travaille actuellement sur une figure énantiomorphe, la voiture devra donc être au dessus). Pour &phi;(x), nous allons donc prendre le maximum de toutes ces droites. (la borne supérieure des équations trouvées quand t varie entre <math>[0;\frac{\pi}{2}]</math>, ce qui revient à cos(t) = x (l'emplacement de la voiture), ou encore t = arccos(x), soit t &isin; [0;arccos(x)]).<br />
<math>\Gamma(t) = \sin(t) - x\tan(t)</math> et <math>\Gamma'(t) = \cos(t) - \frac{x}{\cos ^2(t)}</math>.
La dérivée s'annule pour x=cos<sup>3</sup>(t). Mais on cherche t ! Donc <math>t_0 = \arccos(\sqrt[3]{x})</math>, qui est plus petit que arccos(x), ce qui semble correct.<br />
On trouve donc notre valeur pour <math>\sin(t_0)-\cos ^3(t_0)*\tan(t_0) = \sin(t_0)-\cos ^2(t_0)*\sin(t_0) = \sin(t_0)(1-\cos ^2(t_0)) = \sin ^3(t_0) = \sin ^3(\arccos(\sqrt[3]{x})) = \phi(x)</math>.<br />
Comme tout le monde devrait le savoir, <math>\sin(\arccos(z))=\sqrt{1-z^2}</math>, d'où <math>\phi(x)={(1-x^{\frac{2}{3}})}^{\frac{3}{2}}</math>. Voilà la courbe décrite par la porte ! (toujours de façon énantiomorphe !)
<p style="text-align:center;"><img src="https://lachal.neamar.fr/Pics/Defis/Titeuf4.png" /></p>
<p>Moralité : ce n'est pas vraiment un cercle, ce n'est pas vraiment une exponentielle, ce n'est pas vraiment une racine carrée (on a bien des racines, mais elles sont cubiques). Quant à l'inverse...définitivement hors sujet !</p>
<p>Cela dit, nous avons là une équation cartésienne pas très parlante. Mais si on utilise une représentation paramétrique, (avec <math>t_0</math> en variable, profitons de cette parenthèse pour rappeler l'équation d'un cercle : <math>y=\sqrt{1-x^2}</math>, une façon d'éluder ces racines carrées étant de poser x=cos(t) et y=sin(t)).
Dans notre cas,<br />
<math>x=\cos ^3(t)</math> et <math>y=\sin ^3(t)</math>.</p>
<p>soit une représentation paramétrique telle que <math>\phi(x)=\sin(t)-\cos ^3(t)*\tan(t)</math>, <math>t \in [0,\frac{\pi}{2}]</math>.<br />
Comme chacun sait, le cosinus se linéarise : <math>\cos ^3(t) = \frac{\cos(3t}+3\cos(t)}{4}</math>.<br />
De même pour sinus...</p>
<p>Bon, vous voyez où on en arrive ! Passons en complexes...</p>
<math>z = x+iy</math>, avec la notation exponentielle : <math>\frac{3}{4}e^{it} + \frac{1}{4}e^{-3it}</math>,qui est l'équation...d'une hypocycloïde ! (comme des oreilles de Mickey qui lui seraient poussées à l'intérieur de la tête...ce qui demande un peu d'imagination).<br />
Ici, il s'agit d'une hypocycloïde à 4 points de rebroussements : c'est à dire qu'on fait roule rà l'intérieur d'un cercle de rayon r un cercle de rayon <math>\frac r4</math>, et qu'on observe la courbe décrite par un point sur le petit cercle : cela s'appelle une astroïde.</p>
<p>Mais ! Quid des tangentes ? Allez hop ! Un petit DL...</p>
<hr />
<h2>En conclusion</h2>
Nous avons donc l'objet insipide (la voiture de Toto, pour ceux qui auraient déjà oubliés...), de hauteur l, et le garage de hauteur h.
Rappelons notre équation : <math>y ={(1-x^{\frac{2}{3}})}^{\frac{3}{2}}</math>, soit <math>x=\sqrt{(l^{\frac{2}{3}}-(l-h)^{\frac{2}{3}})}</math>. Voilà la réponse que Titeuf devra donner s'il veut voir sa superbe Smart survivre un nycthémère de plus...</p>
</fieldset>-->
</div>
</body>
</html>
