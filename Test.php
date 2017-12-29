<?php
$buffer=<<<TEST
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title><TITRE></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="owner" content="Neamar" />
<meta name="author" content="Neamar" />
<meta name="robots" content="all" />
<meta name="rating" content="general" />

<meta name="reply-to" content="neamar@neamar.fr" />
<meta name="keywords" content="<TITRE>" />
<meta name="description" content="<DESC>" />
<meta name="copyright" content="Copyright © - Some Right Reserved - 2006-2009" />

<link rel="start" title="Accueil" href="http://neamar.fr/index.php" />
<link rel="alternate" type="application/rss+xml" title="Derniers ajouts sur le dictionnaire" href="rss.php" />
<link rel="icon" type="image/x-icon" href="http://lachal.neamar.fr/favicon.ico" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="http://lachal.neamar.fr/favicon.ico" /><![endif]-->
<link href="http://lachal.neamar.fr/definition_design.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://neamar.fr/Res/Typo/Typo.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://lachal.neamar.fr/JS.js"></script>

<link href="http://neamar.fr/design.css" rel="stylesheet" title="Design par défaut. (Vista)" type="text/css" media="screen" />
<link href="http://neamar.fr/Menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="menu">
<!--Menu Accueil -->
<dl>
<dt><a href="http://neamar.fr/NoJS.php?Menu=Accueil" rel="nofollow" onclick="return false">Accueil</a></dt>
<dd>

<ul>
<li><a href="http://lachal.neamar.fr/Presentation.php">Présentation</a></li>
<li><a href="http://lachal.neamar.fr/Contributeurs.php">Contributeurs</a></li>
<li><a href="http://lachal.neamar.fr/News.php">Informations</a></li>
<li><a href="http://lachal.neamar.fr/AuRevoir.php">Au revoir...</a></li>

<li class="fin_liste">&nbsp;</li>

</ul>
</dd>
</dl>
<!--Menu Dictionnaire -->
<dl>
<dt><a href="http://neamar.fr/NoJS.php?Menu=Dictionnaire" rel="nofollow" onclick="return false">Dictionnaire</a></dt>
<dd>
<ul>

<li><a href="http://lachal.neamar.fr/index.php">Tous les mots</a></li>
<li><a href="http://lachal.neamar.fr/index.php">Catégories</a>
<ul>
<li><a href="http://lachal.neamar.fr/Categorie::Rhetorique"><nolink>Rhétorique</nolink></a></li>
<li><a href="http://lachal.neamar.fr/Categorie::Acronyme">Acronymes</a></li>
<li><a href="http://lachal.neamar.fr/Categorie::Neologisme_Lachalien">Néologismes</a></li>
<li><a href="http://lachal.neamar.fr/Categorie::Mot_complexe">Mots complexes</a></li>
<li><a href="http://lachal.neamar.fr/Categorie::Citation_latine">Citations latines</a></li>

</ul></li>

<li class="fin_liste">&nbsp;</li>
</ul>
</dd>
</dl>
<!--Menu Rubriques -->
<dl>
<dt><a href="http://neamar.fr/NoJS.php?Menu=Rubriques" rel="nofollow" onclick="return false">Rubriques</a></dt>

<dd>
<ul>
<li><a href="http://lachal.neamar.fr/Histoire.php">Histoires</a>
<ul>
<li><a href="http://lachal.neamar.fr/78-<nolink>Toto l'apprenti sigisbée</nolink>"><nolink>Toto l'apprenti sigisbée</nolink></a></li>
<li><a href="http://lachal.neamar.fr/77-<nolink>Toto%20entre%20l%27oblativit%C3%A9%20et%20le%20n%C3%A9potisme</nolink>"><nolink>Toto le népotiste</nolink></a></li>
<li><a href="http://lachal.neamar.fr/76-<nolink>Toto%20l'aspirant%20%E0%20la%20ploutocratie</nolink>"><nolink>Toto l'aspirant à la ploutocratie</nolink></a></li>
<li><a href="http://lachal.neamar.fr/74-Le%20fumeur%20impenitent"><nolink>Le fumeur impénitent</nolink></a></li>
<li><a href="http://lachal.neamar.fr/73-Elmer%20au%20pays%20des%20lagomorphes"><nolink>Elmer au pays des lagomorphes</nolink></a></li>

<li><a href="http://lachal.neamar.fr/62-Picsou%20le%20banquier"><nolink>Picsou le banquier</nolink></a></li>
<li><a href="http://lachal.neamar.fr/61-Schtroumpf%20a%20la%20mer"><nolink>Schtroumpf à la mer</nolink></a></li>
<li><a href="http://lachal.neamar.fr/60-Titeuf,%20le%20retour%20!"><nolink>Titeuf, le retour !</nolink></a></li>
<li><a href="http://lachal.neamar.fr/55-Mickey%20regarde%20passer%20les%20trains"><nolink>Mickey à la campagne</nolink></a></li>
<li><a href="http://lachal.neamar.fr/54-Titeuf%20et%20sa%20voiture"><nolink>Titeuf à Donf</nolink></a></li>
<li><a href="http://lachal.neamar.fr/53-Le%20collier%20de%20Diddlina"><nolink>Le collier de Diddlina</nolink></a></li>
<li><a href="http://lachal.neamar.fr/52-<nolink>Toto%20de%20la%20cambrousse</nolink>"><nolink>Toto de la cambrousse</nolink></a></li>
<li><a href="http://lachal.neamar.fr/46-<nolink>Toto%20et%20le%20tonton%20d%27Am%C3%A9rique</nolink>"><nolink>Toto et le tonton d'Amérique</nolink></a></li>
<li><a href="http://lachal.neamar.fr/32-<nolink>Toto%20sur%20les%20bancs%20de%20l%27%C3%A9cole%20communale</nolink>"><nolink>Toto à l'école communale</nolink></a></li>

<li><a href="http://lachal.neamar.fr/31-<nolink>Toto%20au%20pays%20de%20l%27infini</nolink>"><nolink>Toto au pays de l'infini</nolink></a></li>
</ul></li>
<li><a href="http://lachal.neamar.fr/Rubrique.php">Toutes les expressions</a></li>
<li><a href="http://lachal.neamar.fr/Expressions.php">Ça vient du c&oelig;ur !</a></li>
<li><a href="http://lachal.neamar.fr/Correspondance.php">Formules épistolaires</a></li>
<li><a href="http://lachal.neamar.fr/Defi.php">Défis</a>
<ul>

<li><a href="http://lachal.neamar.fr/Defi-3-M%C3%A9langes%20de%20jetons">Mélanges de cartes</a></li>
<li><a href="http://lachal.neamar.fr/Defi-2-Les%20d%C3%A9s%20schtroumpf%C3%A9s">Les dés schtroumpfés</a></li>
<li><a href="http://lachal.neamar.fr/Defi-1-Les%20sucres%20du%20grand%20Khong">Les sucres du grand Khong</a></li>
</ul></li>

<li class="fin_liste">&nbsp;</li>
</ul>
</dd>
</dl>
<!--Menu Misc -->

<dl>
<dt><a href="http://neamar.fr/NoJS.php?Menu=Misc" rel="nofollow" onclick="return false">Misc</a></dt>
<dd>
<ul>
<li><a href="http://neamar.fr/Mail.php">Me contacter</a></li>
<li><a href="http://validator.w3.org/check?uri=referer">Valide XHTML 1.0 Strict</a></li>
<li><a href="http://neamar.fr/Timeline.php">Timeline</a></li>

<li class="fin_liste">&nbsp;</li>
</ul>
</dd>
</dl>
<div style="position:absolute; right:0px; top:5px;" id="GoogleSearch">
<form action="http://www.google.fr/cse" id="cse-search-box">
<div>
<input type="hidden" name="cx" value="partner-pub-4506683949348156:a3wkew-rnji" />

<input type="hidden" name="ie" value="ISO-8859-1" />
<input type="text" name="q" size="12" onmouseover="this.size=25;" onmouseout="this.size=12;"/>
<input type="submit" name="sa" value="Rechercher" />
</div>
</form>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=fr"></script>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4257957-1");
pageTracker._setDomainName(".neamar.fr");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<noscript><p style="color:red; text-decoration: blink; font-weight:800;"><br /><br /><br />Afin de pouvoir profiter au maximum des sites sur neamar.fr, il est fortement recommandé d'activer JavaScript.</p></noscript>
</div>

<div id="Main">
<p>SITE EN DÉRANGEMENT. Merci d'excuser les éventuels bugs et temps de chargement longuets !</p>
<h1>Traduction Lachal/Français : 403 mots</h1>
<p>La définition jointe est incomplète.<br />
Cliquez sur le mot pour ouvrir une nouvelle page affichant plus d'informations et des exemples.</p>
<h3 class="Lettre"><a href="a">a</a></h3>

<dl>
<dt class="blanc">A posteriori<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Se déduit de l'expérience. </p>

</dd>


<dt class="bleu">A Priori<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>A priori, locution latine, est un mot servant à désigner un raisonnement qui va de la cause à l'effet</p>

</dd>


<dt class="blanc">Ab imo pectore<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>Du fond du cœur, sert souvent à désigner une extrême douleur. </p>

</dd>


<dt class="bleu">Ab irato<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>

<dd><p>(Terme juridique) Cette expression latine désigne aujourd'hui l'acte réalisé de façon irréfléchie, sous l'effet de la colère ou de la folie. <br />
Locution latine </p>

</dd>


<dt class="blanc">Abscons</dt>
<dd><p>Tellement complexe qu'il n'en a plus aucun sens. </p>

</dd>


<dt class="bleu">Abstrusion<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Action d'abstruser, état abstrus (cacher profondément). <br />
Qui est difficile à comprendre, à saisir par l’esprit. </p>

</dd>


<dt class="blanc">Acrimonie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Mauvaise humeur exprimée par des propos acerbes ou hargneux. </p>

</dd>


<dt class="bleu">Ad augusta per angusta<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>Proverbe latin&nbsp;: «&nbsp;à de grands résultats par des voies étroites&nbsp;», une façon de dire que la gloire n'arrive pas facilement. <br />

C'est aussi le mot de passe des conjurés d'Hernani (Victor Hugo)</p>

</dd>


<dt class="blanc">Ad hoc<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Ad hoc est une locution latine qui signifie «&nbsp;qui va vers ce vers quoi il doit aller&nbsp;», c'est-à-dire formé dans un but précis. </p>

<p>Une personne ad hoc signifie donc que pour un individu donné ayant une connaissance accrue d'une matière, cet individu est parfaitement qualifié pour exécuter la tâche qui lui est confiée. </p>

</dd>


<dt class="bleu">Ad libitum<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Locution latine qui exprime l'indifférence quant à une décision, liberté laissée à un musicien lorsqu'il exécute une œuvre. </p>

</dd>


<dt class="blanc">Ad litteram<em><nolink>Catégorie : Citation latine</nolink></em></dt>

<dd><p>A la lettre. </p>

</dd>


<dt class="bleu">Ad Patres<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Du latin ad patres «&nbsp;chez les ancêtres&nbsp;»&nbsp;: désigne une personne décédée. Aller ad patres, c'est mourir&hellip; </p>

</dd>


<dt class="blanc">Adamantin<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Adamantin est un adjectif relatif au diamant&nbsp;: dureté adamantine (qui a la dureté du diamant), éclat adamantin (qui a l'éclat du diamant). </p>

</dd>


<dt class="bleu">Admonestation<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Faire une sévère réprimande à quelqu'un. </p>

<p>Anciennement, admonester était un terme de jurisprudence dont on se servait lorsqu'un particulier ayant commis une faute qui ne méritait pas une grande punition, le juge le mandait pour lui faire quelque remontrance à huis clos, avec défense de récidiver. </p>

</dd>


<dt class="blanc">Aduler</dt>
<dd><p>Flatter bassement, en courtisan servile, combler de louanges. </p>

</dd>


<dt class="bleu">Affété<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui est plein de manière précieuse de parler ou d'agir. <br />
Il se dit aussi des Choses qui marquent de l'affectation. </p>

</dd>


<dt class="blanc">Affidé<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Personne à qui l'on se fie pour commettre une action répréhensible&nbsp;; membre d'une société secrète, d'un complot. </p>

</dd>


<dt class="bleu">Affiquet<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Parure, ajustement. <br />
S'utilise au pluriel et par raillerie, sur l'accoutrement d'une femme. </p>

</dd>


<dt class="blanc">Aficionados</dt>
<dd><p>A l'origine, passionné de courses de taureaux. Désigne maintenant dans le langage courant quelqu'un qui aime quelque chose avec ferveur. </p>

</dd>


<dt class="bleu">Alacrité<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>État de vigueur et de vitalité, souvent mêlé d'enjouement et d'entrain. </p>

</dd>


<dt class="blanc">Alambiqué<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Raffiné jusqu'à être obscur, très compliqué. </p>

</dd>

<dt class="bleu">Alea jacta est<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p><em>Alea jacta est</em>, ou mieux <em>Alea iacta est</em> – le latin ignorant la lettre j, est une locution latine signifiant «&nbsp;le sort en est jeté&nbsp;». Ces paroles furent prononcées par César, le 12&nbsp;janvier 49 av. J.-C. lors du passage du Rubicon. <br />
Sommé par le Sénat de lui remettre ses légions et de rentrer en Italie comme civil ordinaire, Jules César décida de braver l'autorité du Sénat romain et d'affronter Pompée. </p>

<p>Plutarque, Suétone et Appien dépeignent César réfléchissant longuement face à l'importance de son entreprise qui allait bouleverser la République. De plus, selon Suétone, César prit sa décision à la suite d'un signe miraculeux qui entraîna ses troupes à franchir le pont du Rubicon. Toujours selon ces trois historiens, il prononça alors la célèbre phrase «&nbsp;Alea iacta est&nbsp;», «&nbsp;le sort en est jeté&nbsp;». </p>

<p>La rivière du Rubicon marquait la limite entre la Gaule cisalpine, province sous l'autorité du proconsul Jules César, et l'Italie. Un tel acte, contraire à la décision du Sénat, fut considéré comme un acte d'agression. Il déclencha, du même coup, la guerre civile. </p>

</dd>


<dt class="blanc">Alinéa<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>L’alinéa est le signe de ponctuation qui signale le début d’un nouveau paragraphe (souvent équivalent à 4&nbsp;espaces consécutifs). </p>

</dd>


<dt class="bleu">Allégorie<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Allégorie signifie «&nbsp;parler en public&nbsp;». Il s'agit d'une forme de représentation indirecte qui emploie une chose (une personne, un être animé ou inanimé, une action) comme signe d'une autre chose, cette dernière étant souvent une idée abstraite difficile à représenter directement. La signification étymologique est&nbsp;: une autre manière de dire, au moyen d'une image figurative ou figurée. </p>

</dd>


<dt class="blanc">Almée<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Le terme Almée désigne une femme indienne qui fait profession d'improviser des vers, de chanter et de danser dans les fêtes. <br />
Les almées étaient choisies parmi les filles les plus belles, et recevaient une éducation soignée, elles représentent l'érotisme dégagé par le type de la danseuse orientale. </p>

</dd>


<dt class="bleu">Amphibologique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Double sens présenté par une phrase en raison de sa construction ou du choix de certains mots. On peut citer par exemple&nbsp;: «&nbsp;Ce pain n'est pas coupable, donc il est innocent&nbsp;», «&nbsp;Elle est sortie en pleurant du café&hellip;&nbsp;» (des larmes au café)</p>

</dd>


<dt class="blanc">Amphigourique<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>Figure de rhétorique qui consiste à écrire un discours ou un texte de manière volontairement burlesque, obscure ou inintelligible. Par extension, écrit ou discours dont les phrases, contre l’intention de l’auteur, ne présentent que des idées sans suite et n’ont aucun sens raisonnable. </p>

</dd>


<dt class="bleu">Ampoulé<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Qui est enflé. Il ne se dit qu’au figuré et seulement en parlant des paroles ou des écrits qui sont prétentieux, emphatiques, sans profondeur ou creux. </p>

</dd>

<dt class="blanc">Anacoluthe<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Figure de style introduisant une rupture dans la construction d’une phrase. </p>

<p>«&nbsp;Anacoluthe&nbsp;» est aussi un des jurons préférés du capitaine Haddock</p>

</dd>


<dt class="bleu">Anacréontique<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Qui a le ton, la manière des pièces d’Anacréon, en parlant d’un certain genre de poésie caractérisé par la laudation de la volupté, par extension, qui est teinté d’une légère licence érotique. </p>

</dd>


<dt class="blanc">Anagogique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Une interprétation anagogique, s'élève du sens littéral à un sens spirituel. </p>

</dd>


<dt class="bleu">Analepse<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Une analepse ou retour en arrière est une figure de style. Elle correspond à un retour en arrière, au récit d'une action qui appartient au passé. Il consiste à raconter après-coup un événement. On peut également parler de flashback pour exprimer cette idée, mais le terme de flashback ne s'utilise qu'à propos de cinéma. L'analepse est aussi utilisée pour la navigation. </p>

</dd>


<dt class="blanc">Anamnèse<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Histoire des antécédents, résumé. <br />
Dans l'église catholique, l'anamnèse relate la vie de Jésus-Christ en quelques phrases. </p>

<p>Désigne aussi et plus couramment une évocation volontaire du passé. </p>

</dd>


<dt class="bleu">Anathème<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Sentence de malédiction de l'Église. <br />

Le terme s'emploie quelquefois, au figuré, surtout dans le style soutenu, et signifie «&nbsp;réprobation&nbsp;», «&nbsp;blâme solennel&nbsp;». <br />
Par extension, il désigne aussi celui ou celle qui est l'objet d'opprobre ou d'exécration. </p>

</dd>


<dt class="blanc">Anatidé</dt>
<dd><p>Les anatidés (ou Anatid&aelig;) est une famille d'animaux à laquelle appartiennent les oies, les cygnes, les canards et autres espèces apparentées. </p>

</dd>


<dt class="bleu">Animadversion<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Censure, blâme&nbsp;; désigne une haine persévérante. </p>

</dd>


<dt class="blanc">Antépénultième</dt>

<dd><p>Qui précède l'avant-dernier. </p>

</dd>


<dt class="bleu">Anthropomorphisme</dt>
<dd><p>Tendance à attribuer aux divinités et aux animaux des caractéristiques propres à l'homme et des sentiments. </p>

</dd>


<dt class="blanc">Antinomique</dt>
<dd><p>Qui entraîne une opposition ou une contradiction. </p>

</dd>


<dt class="bleu">Apagogie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Terme de rhétorique. Sorte de démonstration par laquelle on fait voir la vérité d'une chose en prouvant l'impossibilité ou l'absurdité du contraire. </p>

</dd>


<dt class="blanc">Apocatastase<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Apocatastase est la transcription du terme grec apocatastasis, qui signifie la restauration dans l’état original ou primordial. </p>

</dd>


<dt class="bleu">Apocryphe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>On qualifie d’apocryphe un écrit dont l'authenticité n'est pas établie, et qui est en conséquent douteux, voire suspect. </p>

</dd>


<dt class="blanc">Apodictique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Un jugement apodictique présente un caractère d'universalité et de nécessité absolue. Une proposition apodictique est nécessairement vraie et irréfutable, où que vous soyez (par opposition à assertorique). </p>

</dd>

<dt class="bleu">Apologétique<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>L'apologétique est un champ d'études théologique ou littéraire consistant en la défense systématique d'une position, d'un dogme. Un auteur s'engageant dans cette démarche est appelé un «&nbsp;apologiste&nbsp;» ou un «&nbsp;apologète&nbsp;» (ce dernier terme ayant une connotation plus religieuse). </p>

</dd>


<dt class="blanc">Apopathodiaphulatophobe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>L'apopathodiaphulatophobie est la peur de la constipation. Elle peut entraîner chez certains individus une surconsommation de produits laxatifs amenant à des mélanoses rectocoliques et autres colites réactionnelles sanguines. </p>

</dd>


<dt class="bleu">Apophatique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Se dit d'une théologie qui approche la connaissance de Dieu en partant de ce qu'il n'est pas plutôt que de ce qu'il est, approche dubitative. </p>

</dd>

<dt class="blanc">Apophtegme<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Parole mémorable de quelque personne illustre ayant valeur de maxime. </p>

</dd>


<dt class="bleu">Aporie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Contradiction irréductible. <br />

Terme grec signifiant embarras. </p>

</dd>


<dt class="blanc">Apostolique</dt>
<dd><p>L'adjectif apostolique correspond à la description des apôtres dans la religion chrétienne. Le terme apostolique désigne maintenant une activité à laquelle on se consacre de façon désintéressée. </p>

</dd>


<dt class="bleu">Aréopage<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>L'aréopage (en grec àreios págos) était à Athènes la «&nbsp;colline d'Arès&nbsp;», située à l'ouest de l'Acropole&nbsp;; c'était aussi le nom du conseil qui s'y réunissait. <br />
Aujourd'hui, c'est un synonyme d'assemblée, de réunion de gens compétents et choisis. </p>

</dd>


<dt class="blanc">Assentiment</dt>
<dd><p>Consentement, accord à une proposition, une opinion. </p>

</dd>


<dt class="bleu">Assertorique<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Un jugement assertorique énonce une vérité de fait, sans la poser comme nécessaire. </p>

</dd>


<dt class="blanc">Assuétude</dt>

<dd><p>Etat de fébrilité et d'addiction. </p>

</dd>


<dt class="bleu">Ataraxique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>État du sage affranchi de toute émotion, de toute passion. <br />
Quiétude absolue de l'âme</p>

</dd>


<dt class="blanc">Atavisme</dt>
<dd><p>Un atavus (ou atavisme) est en génétique un caractère primitif qui réapparaît après une ou plusieurs générations. </p>

<p>Le terme est fréquemment employé dans un sens psychologique pour désigner, de manière plus ou moins fondée, et souvent en mauvaise part, une prédisposition innée à certains comportements, notamment rebelles&nbsp;: les criminologues du XIXe siècle s'attachaient ainsi à démontrer l'existence d'un atavisme criminel chez certaines personnes ou catégories de personnes. </p>

<p>On parle aussi en matière sociale d'atavisme pour qualifier certaines résurgences de choses dont on croyait être débarrassé, tel que la réapparition de mouvements d'inspiration nazie en Allemagne. </p>

</dd>


<dt class="bleu">Atermoiement</dt>
<dd><p>Remettre à plus tard, chercher à gagner du temps</p>

</dd>


<dt class="blanc">Atrabilaire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Qui caractérise une personne facilement inquiète ou irascible. </p>

</dd>


<dt class="bleu">Attentatoire</dt>
<dd><p>Qui porte atteinte à. </p>

</dd>


<dt class="blanc">Auguste</dt>
<dd><p>Vénérable, majestueux. </p>

</dd>


<dt class="bleu">Autarcie</dt>
<dd><p>L'autarcie est une politique économique qui préconise l'autoproduction par un pays de la plus grande partie de ce qu'il a besoin de consommer, et la réduction des importations au strict minimum. Un pays vivant en autarcie fonctionne en économie fermée. Inversement, un pays ayant ouvert son activité commerciale à l'étranger a une économie ouverte. </p>

<p>L'autarcie a pour but principal de réduire le plus possible les dépenses à l'importation, et ainsi d'établir un équilibre économique à l'intérieur du pays. </p>

</dd>


<dt class="blanc">Autodafé<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Destruction par le feu. </p>

</dd>


<dt class="bleu">Automédon<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Par allusion à un personnage de la mythologie grecque, celui qui conduit une voiture. Le mot ne s'emploie qu'en plaisanterie. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="b">b</a></h3>
<dl>
<dt class="blanc">Bacchanales</dt>

<dd><p>Les bacchanales étaient des fêtes religieuses célébrées dans l'Antiquité. Liées aux mystères dionysiaques, elles se tenaient en l'honneur de Dionysos-Bacchus, dieu du vin, de l'ivresse et des débordements, notamment sexuels. Inspirées des anciennes fêtes dionysiaques grecques, les cérémonies des bacchanales furent introduites en Italie où, se mêlant à d'autres coutumes, elles servirent bientôt de prétexte aux orgies et aux désordres les plus extravagants. </p>

</dd>


<dt class="bleu">Bachique</dt>
<dd><p>Relatif à Bacchus. </p>

</dd>


<dt class="blanc">Baloche</dt>
<dd><p>Fête au cours de laquelle les autochtones s'imbibent de gnôle comme des éponges, avant d'aller s'essorer au bas d'un réverbère pour mieux se remplir à nouveau (définition par le groupe 12 &ndash; All rights reserved). </p>

</dd>


<dt class="bleu">Baroque</dt>
<dd><p>L'art baroque est le style de l'art de l'Europe et de l'Amérique latine de la période 17ème &ndash; début 18ème siècle. Il est né en Italie. <br />

Le mot baroque signifie extravagant, imprévu, irrégulier. En architecture, il a donné des châteaux aussi célèbres que Versailles ou le palais de Schönbrunn à Vienne. </p>

</dd>


<dt class="blanc">Bavasser<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Parler pour ne rien dire. </p>

</dd>


<dt class="bleu">Béjaune<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Se dit figurément d'un jeune homme sot et niais. </p>

</dd>


<dt class="blanc">Bélître<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Homme coquin, sot, importun. </p>

</dd>


<dt class="bleu">Bichette</dt>
<dd><p>Petite biche, sauvage mais gracieuse et fragile, un animal tout ce qu'il y a de plus pur. <br />
C'est aussi le surnom affecteux que l'on donne à une fille. </p>

</dd>


<dt class="blanc">Billevesée<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Parole, chose frivole. </p>

</dd>


<dt class="bleu">Bis repetita placent<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>«&nbsp;Les choses répétées plaisent&nbsp;». <br />
Aphorisme imaginé d'après un vers de l'<em>Art poétique</em> d'Horace (365), où le poète dit que telle œuvre ne plaira qu'une fois, tandis que telle autre répétée dix fois plaira toujours&nbsp;: «&nbsp;H&aelig;c decies repetita placebit&nbsp;»). </p>

</dd>


<dt class="blanc">Bonus track</dt>
<dd><p>En terme d'enregistrement musical, un titre bonus (bonus track en anglais) est un morceau de musique qui a été inclus sur une édition spécifique ou une réédition d'un album. On rencontre le plus souvent ces titres sur des articles promotionnels, soit pour inciter le consommateur à acheter un album qu'il n'aurait pas acheté sinon, ou pour racheter des albums qu'il a déjà. Par opposition avec le morceau caché, les titres bonus sont affichés sur la liste de lecture de l'album. </p>

</dd>


<dt class="bleu">Borborygme</dt>

<dd><p>Bruit de gargouillement produit par la mobilisation des gaz dans un segment du tube digestif qui contient une abondante quantité de liquide. Désigne donc par extension une parole incompréhensible, son non identifiable. </p>

</dd>


<dt class="blanc">Bouge</dt>
<dd><p>Une bouge est une sorte de cabaret sordide souvent sale et mal fréquenté, ou un logement malpropre. </p>

</dd>


<dt class="bleu">Boutade<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Mot d'esprit, saillie vive imprévue et originale, faisant souvent appel au paradoxe. </p>

</dd>


<dt class="blanc">Bucolique<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Poème pastoral qui évoque la vie des bergers, mais sous une forme idéalisée, églogue, idylle. Désigne ainsi un idéal de vie, est maintenant désuet. </p>

</dd>


<dt class="bleu">Byzantin<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui présente un caractère d'une excessive et oiseuse subtilité, le terme évoquant les débats des théologiens byzantins. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="c">c</a></h3>

<dl>
<dt class="blanc">Cabale</dt>
<dd><p>Intrigues secrètes, intrigues contre quelqu'un ou quelque chose. </p>

</dd>


<dt class="bleu">Cabotin</dt>
<dd><p>Un cabotin, ou cabot, est un acteur qui cherche davantage à attirer l'attention du spectateur sur lui-même, qu'à servir son rôle. </p>

</dd>


<dt class="blanc">Cacochyme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Se dit quelques fois pour exprimer la bizarrerie de l'esprit, ou l'inégalité de l'humeur. Peut aussi désigner une personne faible et en mauvaise santé. </p>

</dd>


<dt class="bleu">Cacographie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>Le terme cacographie, du grec kakos (laid) et graphein (écrire), désigne une orthographe fautive ou un mauvais style. </p>

</dd>


<dt class="blanc">Cacostomie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Mauvaise odeur de la bouche. </p>

<p>A ne pas confondre avec la cacosmie, qui est un terme qui désigne la modification du sens olfactif (perception des odeurs) conduisant les patients à aimer certaines odeurs désagréables ou fétides. </p>

</dd>


<dt class="bleu">Camouflet<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Vexation humiliante, affront, offense. </p>

</dd>


<dt class="blanc">Capilotade<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Sorte de ragoût fait de plusieurs morceaux de viandes déjà cuites. <br />
Très mauvaise situation, suite à une série de coups, d’attaques médisantes. </p>

</dd>


<dt class="bleu">Capricant<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui se rapproche de la chèvre ou du caprin. Qui est digne d’une chèvre&nbsp;: sautillant, désordonné</p>

</dd>


<dt class="blanc">Captieux<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Qui tend à induire en erreur et à surprendre par quelque finesse, en parlant des raisonnements, des discours, etc. </p>

</dd>


<dt class="bleu">Capucinade<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Discours plat ou acte de dévotion qui parait ridicule et peu sincère, tirade ennuyeuse et moralisante. </p>

</dd>


<dt class="blanc">Cassandre<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Personne qui prédit une issue défavorable aux évènements, au risque de déplaire ou de ne pas être crue. <br />
À l'origine, Cassandre était la fille du Roi Priam. Elle voyait l'avenir mais n'était jamais écoutée. </p>

</dd>


<dt class="bleu">Catabatique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Un vent catabatique, du grec katabatikos qui veut dire descendant la pente, est un vent gravitationnel produit par le poids d'une masse d'air froide dévalant un relief géographique. Diverses conditions météorologiques sont nécessaires pour son déclenchement&nbsp;: une inversion de température en altitude et un faible gradient de pression possiblement accompagné d'une dépression en aval. Une fois le processus enclenché, la masse d'air froide s'accélère et la vitesse du vent peut être extrêmement violente (plus de 300 km/h), nettement plus que le vent anabatique. </p>

<p>Désigne donc au figuré quelques chose de rapide et inextinguible. </p>

</dd>

<dt class="blanc">Cataphatique<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Qui exprime une affirmation. </p>

</dd>


<dt class="bleu">Cathartique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La méthode cathartique est une méthode psychothérapique reposant sur la recherche de la catharsis chez le patient, pratiquée par Freud avant la mise au point de la méthode psychanalytique proprement dite. <br />

Et qu'est ce que la catharsis&nbsp;? C'est une thérapie utilisant l’extériorisation des traumatismes vécus. </p>

</dd>


<dt class="blanc">Catilinaire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>D'une manière générale, sortie véhémente, discours très vif, violent, enflammé contre quelqu'un. </p>

</dd>

<dt class="bleu">Catimini</dt>
<dd><p>L'expression en catimini veut dire en cachette. </p>

</dd>


<dt class="blanc">Caudataire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Tout comme thuriféraire, l'origine de caudataire est religieuse&nbsp;: c'était celui qui portait la queue de la robe d'un pape, d'un prélat. Avec le temps, sa signification a dévié. Caudataire se dit maintenant d’un homme obséquieux, qui flatte et sert quelquefois bassement ceux dont il peut espérer quelque faveur. </p>

</dd>


<dt class="bleu">Cauteleux<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Désigne quelqu'un d'habile, de rusé. </p>

</dd>


<dt class="blanc">Cénacle<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Réunion d'un petit nombre de personnes ayant les mêmes idées, les mêmes goûts, professant surtout les mêmes théories artistiques, littéraires, philosophiques. </p>

</dd>


<dt class="bleu">Cénotaphe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Un cénotaphe est un monument élevé à la mémoire d'une personne ou d'un groupe de personnes et dont la forme rappelle celle d'un tombeau, bien qu'il ne contienne pas de corps. </p>

</dd>

<dt class="blanc">Chantre</dt>
<dd><p>Personne qui glorifie, loue quelqu'un ou quelque chose. </p>

</dd>


<dt class="bleu">Chiche</dt>
<dd><p>Chiche est un mot français ayant trois sens&nbsp;: </p>

<ul>
<li><strong>Avare</strong> (du latin <em>ciccum</em>, chose de peu de valeur)&nbsp;; </li>
<li><strong>Pois</strong> (du latin <em>cicer</em>, pois), maintenant utilisé dans le nom d'un légume, le pois chiche&nbsp;; </li>

<li>Une interjection (chiche&nbsp;! ) exprimant le défi. </li>
</ul>
</dd>


<dt class="blanc">Chouïa</dt>
<dd><p>Signifie un «&nbsp;tout petit peu&nbsp;», plus petit que les «&nbsp;peu&nbsp;» normaux. </p>

</dd>


<dt class="bleu">Cicérone<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Vient de Cicéron, remarquable orateur romain. Le cicérone est celui qui sert de guide aux visiteurs d’une ville, d'un monument&hellip; et commente abondamment son histoire avec éloquence. </p>

</dd>


<dt class="blanc">Circonlocution<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Manière de parler dans laquelle on exprime sa pensée indirectement&nbsp;; périphrase. </p>

<p>Le terme «&nbsp;circonlocution&nbsp;» est utilisé pour désigner une phrase visant à obscurcir le sens de ce qui doit être dit afin de marquer un certain embarras. </p>

</dd>


<dt class="bleu">Circonvolution</dt>
<dd><p>Course circulaire ou elliptique autour d'un centre plus ou moins fixe. </p>

</dd>


<dt class="blanc">Clabauderie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Criaillerie importune et malveillante. </p>

</dd>


<dt class="bleu">Cloaque</dt>
<dd><p>Lieu malpropre, malsain (surtout lorsqu'il y a des liquides). </p>

</dd>


<dt class="blanc">Colifichet</dt>

<dd><p>Petit objet, ornement sans valeur. <br />
Désigne aussi une sorte de pâtisserie sèche et très légère, fait sans beurre et sans sel, que l'on donne à manger aux oiseaux tenus en cage. <br />
En architecture, il s'agit de petits ornements mesquins, mal placés ou qui ne sont pas en rapport avec les lieux où ils sont mis. <br />
Enfin, en musique, il s'agit de passages trop fréquents qui présentent une trop grande variété de sons, tels que la broderie et les roulades, qui «&nbsp;étonnent l'oreille sans plaire à l'esprit, sans toucher le cœur, comme le chant simple, pur et tendre&nbsp;». </p>

</dd>


<dt class="bleu">Comminatoire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>En finance, désigne une mesure destinée à faire pression sur un débiteur, mais qui n'est pas définitive et est susceptible d'être révisée après un certain laps de temps. <br />
Par extension, ce qui implique, et/ou contient une menace. </p>

</dd>


<dt class="blanc">Comparution</dt>
<dd><p>Action de comparaître (de se présenter) devant un juge, un notaire. </p>

</dd>


<dt class="bleu">Componction<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Si vous dites de quelqu'un qu'il fait quelque chose avec componction, vous signifiez que la personne est inspirée d'une gravité recueillie et affectée, qu'elle fait les choses avec cérémonie. <br />
Ironiquement, désigne une fausse repentance. </p>

<p>À l'origine, désigne le regret d'avoir offensé Dieu. </p>

</dd>

<dt class="blanc">Compulsif</dt>
<dd><p>Force intérieure amenant irrésistiblement le sujet à agir. </p>

</dd>


<dt class="bleu">Concaténation</dt>
<dd><p>Le terme concaténation est issu du latin con (avec) et catena (chaîne), il désigne l'action de mettre bout à bout deux chaînes. Le terme est très souvent utilisé en mathématiques (je ne savais pas&hellip; ) et en informatique (ça, je savais&nbsp;! )</p>

</dd>


<dt class="blanc">Concomitant</dt>
<dd><p>Qui accompagne, se produit en même temps, simultanéité de deux ou plusieurs faits. </p>

</dd>


<dt class="bleu">Concupiscent</dt>

<dd><p>Adjectif de concupiscence&nbsp;: envie, inclination violente aux plaisirs qui sont interdits par les moralistes, surtout aux plaisirs sexuels. </p>

</dd>


<dt class="blanc">Concussion<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Malversation d'un fonctionnaire qui ordonne de percevoir ou perçoit sciemment des fonds par abus de l'autorité que lui donne sa charge. </p>

</dd>


<dt class="bleu">Condominium<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>En droit international, un condominium est un territoire sur lequel plusieurs puissances exercent conjointement leurs autorités, leurs souverainetés. </p>

</dd>


<dt class="blanc">Coprolalie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>La coprolalie est une tendance pathologique de langage qui consiste à dire de façon inusuelle des mots grossiers, vulgaires et orduriers. </p>

</dd>


<dt class="bleu">Coquecigrue<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La coquecigrue serait née de l'union d'un coq, d'une grue et de la cigüe, dont elle est d'ailleurs friande. Les coquecigrues se déplacent par bandes d'oiseaux migrateurs, mais dès qu'un humain les aperçoit, l'oiseau qui se trouve en tête pousse un cri perçant pour alerter les autres. Les coquecigrues s'envolent alors vers le ciel et deviennent invisibles. <br />
Débiter des coquecigrues signifie raconter une histoire ou un conte, mentir. </p>

</dd>


<dt class="blanc">Corroboratif</dt>
<dd><p>En général, qui donne appui, force. </p>

</dd>


<dt class="bleu">Corroborer<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Appuyer, confirmer quelque chose. </p>

</dd>


<dt class="blanc">Coruscant<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Désigne ce qui est brillant, éclatant, étincelant. </p>

</dd>

<dt class="bleu">Coryphée<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Le coryphée est le chef de ch&oelig;ur dans la tragédie antique. Il se situe au milieu de la scène et est chargé de guider les choreutes (ou choristes), de prendre parfois la parole au nom du chœur et de dialoguer avec le personnage en scène. De façon ironique, désigne la personne qui se distingue le plus dans une secte, dans un parti, dans une profession ou qui, dans un groupe, prend la parole pour les autres. </p>

</dd>


<dt class="blanc">Cynégétique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Qui concerne la chasse. Art de la chasse. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="d">d</a></h3>
<dl>
<dt class="bleu">Déblatérer<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Parler avec virulence contre quelque chose ou quelqu'un. </p>

</dd>


<dt class="blanc">Défalcation</dt>
<dd><p>Déduire, retrancher d'une somme, d'une quantité. </p>

</dd>


<dt class="bleu">Déliquescence</dt>

<dd><p>Affaiblissement des capacités intellectuelles&nbsp;; décrépitude voire décadence complète</p>

</dd>


<dt class="blanc">Déréliction<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>État d'abandon et de solitude morale complète. </p>

</dd>


<dt class="bleu">Déshérence<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La déshérence est la situation dans laquelle se trouve un bien ou un patrimoine lorsque son propriétaire est décédé sans laisser d'héritier connu. <br />
L'article 768&nbsp;du Code civil français prévoit que l'État recueille les biens par voie de déshérence. Pour désigner une succession qui n'est réclamée par personne, on parle aussi de &quot;succession vacante&quot;. </p>

</dd>

<dt class="blanc">Détracteur</dt>
<dd><p>Celui qui prend plaisir à rabaisser quelqu’un ou quelque chose. </p>

</dd>


<dt class="bleu">Deus ex machina<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Intervention d'un Dieu descendu de la scène au moyen d'une machine. <br />

Dénouement plus heureux que vraisemblable d'une situation tragique. Dans les tragédies antiques, il arrivait fréquemment que la catastrophe se dénouait tout à coup, à la complète satisfaction des spectateurs, au moyen d'un dieu qu'une machine faisait subitement descendre du ciel sur le théâtre. Dans nos pièces modernes, le notaire qui apporte un héritage, l'oncle d'Amérique, revenant juste à temps pour tirer d'embarras son neveu ou sa nièce, voilà ce qui remplace le Deus ex machina. </p>

</dd>


<dt class="blanc">Diantre</dt>
<dd><p>Mot exprimant l'étonnement ou la consternation. </p>

</dd>


<dt class="bleu">Diatribe<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>Texte ou discours qui attaque de façon violente une personne ou une institution. Critique amère, violente, le plus souvent sur un ton injurieux. Il peut s'agir d'un pamphlet, d'une satire&hellip; <br />
Plusieurs auteurs de littérature tels Emile Zola, Victor Hugo, Jean-Baptiste Lozac'h s'exprimaient sous cette forme dans divers journaux&nbsp;: ex d'articles&nbsp;: &quot;J'accuse&quot; de Zola dans le journal l'Aurore. </p>

</dd>


<dt class="blanc">Dilatoire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Du latin dilatorius, de differre qui veut dire «&nbsp;différer, retarder&nbsp;». <br />
Qui tend à prolonger une échéance, un délai. </p>

</dd>


<dt class="bleu">Dipsomane<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Personne qui souffre de pulsions obsessionnelles l'incitant à boire par crises de grandes quantités de boissons alcoolisées, ou toxiques, ou les deux. </p>

</dd>


<dt class="blanc">Disert<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Qui s'exprime avec facilité et aisance</p>

</dd>


<dt class="bleu">Dithyrambique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Qui est (volontiers) excessif ou pompeux dans ses éloges. Qui loue avec enthousiasme, souvent avec pompe, excès, emphase</p>

</dd>


<dt class="blanc">Doxologie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Énoncé se bornant à reproduire une opinion commune ou une apparence. <br />
Religieusement, la doxologie est une louange à la gloire du Christ qui peut s'étendre aux trois personnes de la Trinité. </p>

</dd>


<dt class="bleu">Dyonisiaque<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Relatif à Dionysos, dieu grec que l'on lie souvent aux fêtes et au vin. </p>

<p>Par extension, qui a un caractère de démesure, de foisonnement exubérant. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="e">e</a></h3>
<dl>
<dt class="blanc">E.g.<em><nolink>Catégorie : Citation latine | Acronyme</nolink></em></dt>
<dd><p>Le terme e.g.est l'abréviation d'<em>exempli gratia</em>, expression latine équivalente du français «&nbsp;par exemple&nbsp;». Elle est couramment utilisée en anglais mais ne se retrouve en français que dans le langage littéraire. </p>

</dd>


<dt class="bleu">Eburnéen<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui a la blancheur, l'apparence de l'ivoire. </p>

</dd>


<dt class="blanc">échanson<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Un échanson était un officier chargé de servir à boire à un roi, un prince ou à tout autre personnage de haut rang. En raison de la crainte permanente d'intrigues et de complots, la charge revenait à une personne en qui le souverain plaçait une confiance totale. L'échanson devait en particulier veiller à écarter tout risque d'empoisonnement et parfois même goûter le vin avant de le servir. </p>

<p>Dans la mythologie et les religions, les divinités ont parfois un échanson elles aussi. </p>

<p>De plus, dans la Bible (Genèse, chapitre 40), on parle de l'échanson du pharaon. </p>

</dd>


<dt class="bleu">Eclectisme</dt>
<dd><p>L’éclectisme (du grec eklegein&nbsp;: choisir) est une attitude philosophique consistant à choisir dans plusieurs philosophies les éléments qui paraissent intéressants pour constituer un système complet. </p>

</dd>


<dt class="blanc">égrillard</dt>
<dd><p>Un égrillard (nom commun vieilli) est un gaillard, un homme plein de vigueur et d’énergie. L’adjectif est plus courant. Il désigne des paroles grivoises, paillardes, polissonnes ou une personne qui se complaît dans des propos ou des sens entendus licencieux. </p>

</dd>


<dt class="bleu">élégie<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>L’élégie (du mot grec elegeia, «&nbsp;chant de deuil&nbsp;») est une forme de poème tendre et triste. Dans l’Antiquité, on appelle «&nbsp;élégie&nbsp;» tout poème alternant hexamètres et pentamètres en distiques&nbsp;: ce sont les vers élégiaques. </p>

</dd>


<dt class="blanc">élucubration<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Réflexion laborieuse. S'emploie surtout de manière ironique pour souligner un résultat peu convaincant. </p>

</dd>


<dt class="bleu">Empyreumatique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Arôme qui rappelle la fumée, le brulé et le caoutchouc (famille des odeurs brulées, chauffées ou séchées). </p>

</dd>


<dt class="blanc">En tapinois</dt>

<dd><p>Action réalisée en cachette, en douce (derrière le dos du prof). </p>

</dd>


<dt class="bleu">Endémique</dt>
<dd><p>Ce qui est particulier à une localité donnée. </p>

<ul>
<li>En médecine, une maladie est dite endémique d'une région si elle y sévit de manière permanente&nbsp;; </li>

<li>en biologie, une espèce est dite endémique d'une région déterminée si elle n'existe que là. </li>
</ul>
</dd>


<dt class="blanc">Endiguer</dt>
<dd><p>Réfréner, canaliser. </p>

</dd>


<dt class="bleu">Engramme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Empreinte laissée dans le cerveau ou le système nerveux par un événement douloureux et susceptible d’être réactivé par une stimulation appropriée. </p>

</dd>


<dt class="blanc">Entropie</dt>
<dd><p>En thermodynamique, l'entropie est une fonction d'état qui permet de mesurer le degré de désordre d'un système au niveau microscopique. Plus l'entropie du système est élevée, moins ses éléments sont ordonnés, liés entre eux, capables de produire des effets mécaniques, et plus grande est la part de l'énergie inutilisée pour l'obtention d'un travail&nbsp;; c'est à dire gaspillée de façon incohérente. </p>

</dd>


<dt class="bleu">Epigramme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>L'épigramme était à l'origine une courte phrase (inscription) qui en ornait les tombeaux, statues et monuments grecs. Les Latins furent les premiers à lui donner une destination satirique ou moqueuse. <br />
L'épigramme désigne (de nos jours) une petite pièce de vers d'intention satirique, se terminant généralement par un trait piquant. </p>

</dd>


<dt class="blanc">éponyme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>L'éponymie est le fait de «&nbsp;donner son nom&nbsp;» à quelque chose. Ce qui donne son nom est un éponyme. <br />
Le terme s'emploie surtout en littérature, histoire, cinéma économie&nbsp;: </p>

<ul>
<li>pour une personne/chose donnant son nom à l'œuvre&nbsp;; </li>

<li>pour un personnage (Dieu, héros, saint) ayant donné son nom à un lieu ou à un peuple&nbsp;; </li>
<li>pour le créateur d'une entreprise qui la baptise de son nom. </li>
</ul>
</dd>


<dt class="bleu">Epsilon</dt>
<dd><p>Cinquième lettre de l'alphabet grec, souvent utilisée pour désigner une petite quantité. </p>

</dd>


<dt class="blanc">Errare humanum est<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>«&nbsp;Il est de la nature de l'homme de se tromper&nbsp;» ou «&nbsp;Il est humain de se tromper&nbsp;»</p>

<p>La locution latine complète est la suivante&nbsp;: <br />

Errare humanum est, perseverare diabolicum<br />
= «&nbsp;Il est humain de se tromper, persévérer [dans l’erreur] est diabolique&nbsp;». </p>

</dd>


<dt class="bleu">éructer</dt>
<dd><p>Remontée de gaz provenant de l'estomac. Par extension, proférer des propos virulents. </p>

</dd>


<dt class="blanc">Erythrophobie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Crainte excessive, à caractère pathologique, de rougir en public. </p>

</dd>


<dt class="bleu">Escarcelle</dt>

<dd><p>Une escarcelle était autrefois une grande bourse que l’on portait suspendue à la ceinture, un peu comme une aumônière. Par extension et plaisanterie, l’escarcelle désigne une réserve d’argent. </p>

</dd>


<dt class="blanc">Esotérique</dt>
<dd><p>Compréhensible seulement pour les initiés. </p>

</dd>


<dt class="bleu">étiologie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>L'étiologie (grec &#945;&#953;&#964;&#953;&#959;&#955;&#959;&#947;&#943;&#945;, de &#945;&#953;&#964;&#943;&#945;, ätía &ndash; la cause et &#955;&#972;&#947;&#959;&#962;, lógos &ndash; l'étude) concerne une École philosophique de l'Antiquité qui s'intéressait à l'étude des causes. </p>

<p>On parle de conte étiologique lorsqu'une histoire a pour but de donner une explication imagée à un phénomène ou une situation dont on ne maîtrise pas l'origine. Exemple&nbsp;: Pourquoi les chiens n'aiment-ils pas les chats&nbsp;? </p>

</dd>


<dt class="blanc">étrusque</dt>
<dd><p>L'Étrusque est la langue du peuple du même nom, habitants du nord de l'Italie avant la domination romaine. Son écriture, inspiré du grec donna naissance au latin. <br />
C'est l'ancêtre du latin, donc encore plus compliqué à comprendre&hellip; </p>

</dd>


<dt class="bleu">Ex Abrupto<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Locution empruntée du latin, qu'on emploie quelquefois pour indiquer la rapidité et l'absence de préparation à un acte ou une action. </p>

</dd>


<dt class="blanc">Ex Cathedra<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>&quot;Du haut de la chaire&quot;. <br />

Cette locution, par allusion sans doute à la chaire des prédicateurs et des professeurs qui parlent avec autorité en dominant leur auditoire, s'emploie le plus souvent par ironie, à propos de l'homme qui parle d'un ton dogmatique et tranchant, avec morgue et pédantisme&nbsp;: les demi-savants parlent toujours ex cathedra. </p>

</dd>


<dt class="bleu">Ex Nihilo<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Ex nihilo est une expression latine signifiant «&nbsp;à partir de rien&nbsp;». </p>

</dd>


<dt class="blanc">Ex Voto<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Un ex-voto est une offrande faite à Dieu en remerciement&nbsp;: statues, icônes&hellip; Par extension, le terme désigne également un objet ou inscription placé dans un lieu de culte, une église ou un lieu de pèlerinage en remerciement d'une grâce obtenue. </p>

</dd>


<dt class="bleu">Exhaustif</dt>
<dd><p>Qui épuise une matière, une question, qui traite un sujet d'étude à fond et sans rien omettre. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="f">f</a></h3>
<dl>
<dt class="blanc">Factotum<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Emprunté au latin de la Renaissance fac totum («&nbsp;fais tout&nbsp;»)&nbsp;: celui qui s’occupe de tout dans une maison où il est employé. </p>

</dd>


<dt class="bleu">Fallacieux</dt>
<dd><p>Qui est basé sur un mensonge ou un faux. Qui vise à tromper. </p>

</dd>


<dt class="blanc">Fastidieux</dt>
<dd><p>Qui cause de l’ennui, qui est sans intérêt. </p>

</dd>


<dt class="bleu">Fiduciaire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Se dit de valeurs fondées sur la confiance accordée par le public envers l'organisme émetteur. <br />
Une monnaie fiduciaire est un instrument de paiement dont la valeur est égale à celle mentionnée sur le billet. </p>

<p>Le billet est justement l'exemple type d'une valeur fiduciaire&nbsp;: il ne vaut quelque chose que parce qu'on y prête foi (on a foi en la banque et en l'état qui garantissent sa valeur propre). </p>

</dd>


<dt class="blanc">Fielleux</dt>
<dd><p>Plein d'amertume et de méchanceté. <br />

Vient du terme «&nbsp;fiel&nbsp;» qui désigne une amertume qui s'accompagne de méchanceté et d'acrimonie. </p>

</dd>


<dt class="bleu">Fluctuat nec mergitur<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>«&nbsp;Fluctuat nec mergitur&nbsp;» est une locution latine signifiant «&nbsp;Il est battu par les flots, mais ne sombre pas&nbsp;», qui sert de devise à la ville de Paris. <br />

Construite dans une île dont la forme offre quelque ressemblance avec la coque d'un navire, la vieille Lutèce avait pris pour armes un vaisseau. À une époque beaucoup plus rapprochée de nous, une devise fut ajoutée à ces armes parlantes&nbsp;: «&nbsp;Fluctuat nec mergitur&nbsp;». C'était une allusion aux nombreux orages qui avaient soulevé les flots contre les flancs du navire sans pouvoir le submerger. </p>

</dd>


<dt class="blanc">Forfaiture<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Du latin foris factura, le terme de forfaiture désigne l'action accomplie en dehors des règles édictées. Dans le droit féodal, la forfaiture correspondait à une «&nbsp;faute grave&nbsp;». </p>

</dd>


<dt class="bleu">Fuligineux<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Au sens propre qui rappelle la suie. <br />
Au sens figuré, d'une obscurité épaisse. </p>

</dd>


<dt class="blanc">Fustiger</dt>
<dd><p>Plutôt que de les «&nbsp;engueuler&nbsp;» bassement,  fustigeons joyeusement ceux qui le méritent&hellip; Mais si, cherchez bien, vous devez en connaître quelques-uns&hellip; </p>

</dd>


</dl>
<h3 class="Lettre"><a href="g">g</a></h3>

<dl>
<dt class="bleu">Galimatias<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Discours ou écrit embrouillé et confus, qui semble dire quelque chose mais ne dit rien. </p>

</dd>


<dt class="blanc">Galvaniser</dt>
<dd><p>Donner un encouragement, stimuler. </p>

</dd>


<dt class="bleu">Géhenne<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Vient du latin, gehenna, et de l'hébreu ge-hinnom, qui désigne la vallée de Hinnom, près de Jérusalem. </p>

<p>Le premier sens de géhenne est Biblique&nbsp;: il désigne le séjour des réprouvés. La vallée de Géhinnon fut ainsi pour les Juifs l'emblème de l'enfer. C'est pour cela que le terme de géhenne est souvent employé pour désigner le lieu auquel les méchants seront condamnés après leur mort. <br />
Son second sens, figuré et vieilli, désigne une torture appliquée aux criminels, et donc par extension une souffrance intense et intolérable. </p>

</dd>


<dt class="blanc">Génuflexion</dt>
<dd><p>La génuflexion est littéralement l'action de se mettre à genoux (flexion du ou des genoux) en signe de respect. </p>

<p>Religieusement, elle est toujours acceptée et encouragée dans son caractère dévotionnel. </p>

</dd>


<dt class="bleu">Gibecière</dt>
<dd><p>Grand sac de cuir ou de toile qui sert aux chasseurs et qui se porte généralement en bandoulière. <br />
Mais aussi sac des escamoteurs, des personnages fallacieux et des mystagogues. </p>

</dd>


<dt class="blanc">Giga X<em><nolink>Catégorie : Néologisme Lachalien</nolink></em></dt>
<dd><p>Si vous avez déjà un x, un grand X, et un Méga X, utilisez un Giga X&nbsp;! </p>

</dd>


<dt class="bleu">Glose</dt>
<dd><p>Une glose est un commentaire linguistique ajouté dans le corps d'un texte ou d'un livre, ou dans sa marge expliquant un mot étranger ou dialectal, un terme rare. </p>

</dd>


<dt class="blanc">Glossolalie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>Chez certains malades mentaux, production d'un vocabulaire inventé, constitué par des néologismes et une syntaxe déformée. </p>

</dd>


<dt class="bleu">Gouaillerie<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Dire des railleries, se moquer de quelqu'un ou quelque chose. </p>

</dd>

<dt class="blanc">Gourdiflot</dt>
<dd><p>Terme familier et suranné désignant une personne un peu niaise. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="h">h</a></h3>
<dl>
<dt class="bleu">Hédoniste<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>L'hédonisme est une doctrine philosophique qui fait du plaisir la fin de toute existence, et du bien souverain. </p>

</dd>


<dt class="blanc">Hexakosioihexekontahexaphobe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>L'hexakosioihexekontahexaphobie (littéralement, «&nbsp;peur du nombre six cent soixante-six&nbsp;») est une phobie qui tire son origine du verset 13&nbsp;: 18&nbsp;de l'Apocalypse, l'un des livres de la Bible. Ce verset indique que le nombre 666&nbsp;est le Nombre de la bête, bête associée à Satan ou à l'Antéchrist. En dehors de la foi chrétienne, cette phobie a été &ldquo;popularisée&rdquo;, le nombre 666 étant utilisé comme un symbole dans de nombreux films d'épouvante. </p>

<p>Les hexakosioihexekontahexaphobes évitent au maximum toute chose reliée au nombre 666. Un exemple célèbre est celui de Nancy et Ronald Reagan qui, en 1989, alors qu'ils déménageaient vers leur résidence de Bel-Air (Los Angeles) firent changer leur adresse, 666, St. Cloud Road, en 668, St. Cloud Road. Certaines femmes ont exprimé leur inquiétude quant au fait de donner naissance à un enfant le 6&nbsp;juin 2006. </p>

<p>Certains cas plus rares évitent même les références indirectes à ce nombre. Par exemple, la fraction 2/3 a un développement décimal infini qui répète le chiffre 6, et qu'on peut lire comme 0,666&nbsp;666&nbsp;666&nbsp;666&hellip; Certains hexakosioihexekontahexaphobes gravement atteints éviteront d'avoir à utiliser des fractions incluant cette répétition de décimales. Les malades peuvent ainsi considérer qu'obtenir un brelan de 6&nbsp;au poker est un signe de malchance, même si on peut considérer que c'est une assez bonne main. </p>

<p>De nombreux malades ont peur des chiffres constituant 666, plutôt que du nombre en lui-même ou des opérations mathématiques menant à ce résultat. </p>

<p><em>À remarquer&nbsp;: ce mot est bien le plus long de la langue française, <br />
devant anticonstitutionnellement&nbsp;! </em></p>

</dd>


<dt class="bleu">Hic et nunc<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Ici et maintenant. <br />

C'est-à-dire&nbsp;: immédiatement et sans délai. </p>

</dd>


<dt class="blanc">Hiérodule<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Serviteur attaché à un temple. </p>

</dd>

<dt class="bleu">Hippobosque<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Terme du grec ancien signifiant «&nbsp;celui qui fait paître les chevaux&nbsp;», et qui est dérivé du mot cheval, en grec, et du verbe boskein («&nbsp;faire paître&nbsp;»). <br />
L'hippobosque désigne une espèce de mouche nuisible aux chevaux, ainsi appelée parce qu’elle accompagne, comme un pasteur, le cheval dans la prairie. </p>

</dd>

<dt class="blanc">Histrion<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Dans l'antiquité, un histrion est un comédien qui interprète des farces grossières. <br />
On appelle histrion aujourd'hui un mauvais comédien, ou un comédien qui se cantonne dans les genres populaires. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="i">i</a></h3>

<dl>
<dt class="bleu">i.e.<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>«&nbsp;Id est&nbsp;» est une expression latine signifiant «&nbsp;c’est-à-dire&nbsp;». Son abréviation est souvent employée&nbsp;: «&nbsp;i.e.&nbsp;», principalement pour des définitions ou des théorèmes mathématiques. </p>

<p>Cette locution latine (à l’instar de e.g.), disparue de la langue française auparavant est revenue dans l’usage français par anglicisme (les anglais utilisant i. e et e. g de façon courante). </p>

</dd>


<dt class="blanc">Iconoclaste</dt>
<dd><p>Qui cherche à détruire tout ce qui est attaché au passé, à la tradition. </p>

</dd>


<dt class="bleu">Idiolecte<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>En linguistique on appelle idiolecte l'ensemble des usages du langage propres à un individu donné, s'exprimant oralement. </p>

<p>Peut aussi désigner une personne qui cherche à détruire tout ce qui est attaché au passé, à la tradition. </p>

</dd>


<dt class="blanc">Idiosyncrasie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Du grec <em>idios</em>, «&nbsp;propre, spécial&nbsp;» et <em>sugkrasis</em>, « mélange», l'idiosyncrasie est l'<em>idiosugkrasia</em>, le tempérament particulier. Bien qu'on puisse parler d'idiosyncrasie en termes positifs concernant un objet, une personne, une culture, etc. , le terme est plutôt utilisé pour marquer l'exception ou l'anormal dans les idiomes institutionnels. </p>

<p>Ce n'est pas clair&nbsp;? Un exemple alors&nbsp;: le fait que la langue anglaise possède deux mots pour désigner le bœuf (animal = <em>ox</em> et viande = <em>beef</em>) est une idiosyncrasie de la langue. </p>

</dd>


<dt class="bleu">Idoine<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Désigne ce qui est convenable. </p>

</dd>


<dt class="blanc">Immarcescible<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui ne peut se flétrir, au propre et au figuré. </p>

</dd>

<dt class="bleu">Imparidigité<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui a un nombre impair de doigts, en parlant d'animaux. </p>

</dd>


<dt class="blanc">Impénitent</dt>
<dd><p>Qui ne se repent pas, qui persiste dans une habitude. </p>

</dd>


<dt class="bleu">Imprécatoire<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Du latin imprecari, &quot;prier à l'encontre de quelqu'un&quot;, composé du verbe precari, &quot;prier&quot; et du préverbe in, &quot;contre&quot;. Souhait de malheurs qu’on fait contre quelqu’un. </p>

</dd>


<dt class="blanc">In extenso<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>L'expression «&nbsp;in extenso&nbsp;» est d'origine latine, elle a un sens équivalent à «&nbsp;dans son intégralité&nbsp;», par opposition à «&nbsp;par extrait». Ainsi lire un acte (contrat, testament ou jugement) « in extenso&nbsp;» c'est en faire la lecture du premier au dernier mot. </p>

</dd>


<dt class="bleu">In Fine<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Tout à fait au dernier moment. </p>

</dd>


<dt class="blanc">Inanité<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Caractère d'inutilité, de futilité, de vanité. </p>

</dd>


<dt class="bleu">Incartade</dt>
<dd><p>Léger écart de conduite. </p>

</dd>


<dt class="blanc">Incoercible<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Que l’on ne peut contenir ni réprimer. </p>

</dd>


<dt class="bleu">Ineffable</dt>
<dd><p>Qui ne peut être exprimé par des paroles. </p>

</dd>


<dt class="blanc">Inénarrable</dt>
<dd><p>Qui ne peut être ni narré, ni raconté. </p>

</dd>


<dt class="bleu">Inextinguible</dt>

<dd><p>Qui ne peut s'éteindre, qu'on ne peut apaiser, arrêter. </p>

</dd>


<dt class="blanc">Infatuation<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Satisfaction paroxystique et ridicule de soi-même, de la valeur que l'on s'attribue, de ses avantages. </p>

</dd>

<dt class="bleu">Interlope<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Lié à une activité hors de la légalité. Par extension, c'est quelque chose d'équivoque, de louche, de suspect. </p>

</dd>


<dt class="blanc">Irréfragable<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qu'on ne peut récuser ni contredire. </p>

</dd>


<dt class="bleu">Irrévérencieux</dt>
<dd><p>Qui manque de révérence, de respect. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="l">l</a></h3>

<dl>
<dt class="blanc">Laconique</dt>
<dd><p>Qui s'exprime en peu de mots, qui est très concis, en parlant d’une personne. <br />
Les habitants de la Laconie, les Lacédémoniens, étaient réputés pour la concision de leur langage, ce qui a donné ce mot à l'aide du suffixe -ique. </p>

</dd>


<dt class="bleu">Laïus<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Un laïus est un long discours, ou un trop long exposé. Ce terme provient d'un sujet de composition, Le Discours de Laïus, proposé au concours d'entrée à l'École polytechnique en 1804 (Le Petit Robert, édition 2004, p. 1455)&nbsp;: ce sujet «&nbsp;imaginez la réponse de Laïus à Œdipe&nbsp;» avait tellement inspiré les candidats qu'ils en avaient rempli des pages et des pages&nbsp;! <br />
D'où l'origine de l'expression. <br />
Un laïus peut aussi être une manière d'écrire ou de parler qui est vague ou emphatique. </p>

</dd>


<dt class="blanc">Lascive</dt>

<dd><p>Qui est portée sur les plaisirs amoureux, sensuels ou sexuels, ou qui incite aux plaisirs amoureux, sensuels ou sexuels. </p>

</dd>


<dt class="bleu">Laudateur</dt>
<dd><p>Qui loue, qui exprime une louange. </p>

</dd>


<dt class="blanc">Léonin<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Toute chose qui a appartenance au lion. <br />
Le terme «&nbsp;contrat léonin&nbsp;» sera employé pour désigner un contrat aux clauses anormalement déséquilibrées en faveur ou à l'encontre d'un des contractants, un des membres se réservant alors la part du lion (léonin). </p>

</dd>


<dt class="bleu">Lie </dt>

<dd><p>En œnologie (étude du vin), la lie correspond aux levures mortes (et éventuellement quelques résidus végétaux) qui sédimentent au fond du contenant à l'issue de la fermentation. <br />
Au cours de la fermentation alcoolique, puis de la fermentation malolactique, des particules apparaissent dans le vin, c'est la lie. Elle est constituée de levures, de bactéries et de composés organiques floculés et précipités. Après soutirage du vin elle est piégée au fond de la cuve. Riche en matières organiques, il s'agit d'une source de pollution. <br />
C'est aussi de ce terme que vient le nom de la couleur lie de vin ou lie-de-vin (rouge violacé). </p>

<p>Enfin, on parle de manière imagée de la lie quand on veut désigner péjorativement les résidus, les déchets ou les couches sociales considérées comme inférieures. </p>

</dd>


<dt class="blanc">Lilial<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Qui tient du lis, qui en a la pureté et la blancheur. </p>

</dd>


<dt class="bleu">Liminaire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Liminaire vient du latin limen, liminis qui signifie seuil. Au-delà, il peut être utile de préciser que faire une déclaration liminaire revient souvent à «&nbsp;recadrer le débat&nbsp;» comme on dit aussi, c'est-à-dire à (im)poser le contexte de ce que l'on va dire avant de le dire&hellip; C'est donc un truc classique et efficace de rhétorique. Enfin, il n'est pas indifférent de constater que cette acception est arrivée au milieu du 16&nbsp;e siècle, au moment où la pensée (la philosophie) a repris du poids face à la foi (la croyance)&hellip; </p>

</dd>


<dt class="blanc">Litote<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Procédé d'expression qui consiste à dire moins pour faire entendre plus. </p>

</dd>


<dt class="bleu">Littérateur<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Petit écrivain sans intérêt. </p>

</dd>


<dt class="blanc">Logomachie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Assemblage de mots creux dans un discours, dans un raisonnement. <br />
Discussion sur les mots, où dans laquelle les interlocuteurs emploient les mêmes mots dans des sens différents. </p>

</dd>


<dt class="bleu">Logorrhée<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Diarrhée verbale, flot de paroles désordonnées, inc&oelig;rcible et rapide, que l'on rencontre dans certains états d'excitation psychique. </p>

</dd>


<dt class="blanc">Loquacité<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Habitude de parler beaucoup, tendance au bavardage</p>

</dd>


</dl>
<h3 class="Lettre"><a href="m">m</a></h3>
<dl>
<dt class="bleu">Mafflu<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui a de grosses joues (du néerlandais maffelen, mâchonner)</p>

</dd>


<dt class="blanc">Magnificence</dt>
<dd><p>Caractère de ce qui est magnifique. (à ne pas confondre avec munificence&nbsp;! )</p>

</dd>


<dt class="bleu">Malversation</dt>

<dd><p>Détournement de fonds dans l'exercice d'une charge. </p>

</dd>


<dt class="blanc">Manducation<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Ce mot signifie l'action de manger&nbsp;; l'ensemble des actes qui préparent la digestion des aliments et qui comprennent la préhension, la mastication l'insalivation et la déglutition. </p>

</dd>


<dt class="bleu">Mansuétude<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Douceur d’âme qui porte à être indulgent, patient et clément. <br />
Disposition morale qui incline à la bonté, au pardon. </p>

</dd>


<dt class="blanc">Marivauder</dt>

<dd><p>Tenir des propos, particulièrement en matière d’amour, qui rappellent les raffinements et la subtilité des personnages de Marivaux (autrement dit, parler pour ne rien dire d'une façon amoureuse&hellip; ). </p>

</dd>


<dt class="bleu">Marshmallow</dt>
<dd><p>Gros bonbon fait à partir de guimauve, et dont Toto est friand. </p>

</dd>


<dt class="blanc">Matamore<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Faux brave, vantard plus courageux en paroles qu'en actes. <br />
Il s'agit à l'origine d'un personnage comique du théâtre espagnol qui a les caractéristiques du Capitan de la commedia dell'arte&nbsp;: hâbleur, fanfaron mais pleutre devant la moindre menace. Son nom signifie tueur de Maures&nbsp;; ses origines peuvent remonter au théâtre latin, où on trouve déjà ce personnage sous les traits du miles gloriosus de Plaute. </p>

</dd>


<dt class="bleu">Méga  </dt>
<dd><p>Méga (symbole M) est un préfixe du système international (SI) qui représente 10<sup>6</sup> soit un million. <br />
Dans le vocabulaire «&nbsp;Lachalien&nbsp;», désigne un énorme calcul (une méga somme, un méga intervalle, un méga produit, un méga calcul)</p>

</dd>


<dt class="blanc">Méga X<em><nolink>Catégorie : Néologisme Lachalien</nolink></em></dt>
<dd><p>Si vous avez déjà un x, un grand X, utilisez un méga X&nbsp;! </p>

</dd>


<dt class="bleu">Mégalomanie</dt>
<dd><p>Surestimation de ses propres capacités. </p>

</dd>


<dt class="blanc">Mélophage<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Mouche parasite des moutons, de la famille des hippoboscidés. </p>

</dd>


<dt class="bleu">Ménade<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Femme qui, chez les anciens, célébrait les fêtes de Bacchus et se livrait à un délire qui allait jusqu’à la fureur. Par extension, femme méchante ou emportée. </p>

</dd>


<dt class="blanc">Méphistophélique</dt>
<dd><p>Diabolique, qui évoque l'apparence du démon. Vient du personnage Méphistophélès, de l'œuvre «&nbsp;Faust&nbsp;» de G&oelig;the. </p>

</dd>


<dt class="bleu">Méphitique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui produit des effets plus ou moins nuisibles, en parlant de certaines exhalaisons gazeuses, ou dont l'exhalaison est puante, désagréable. Si vous n’aimez pas méphitique, vous pouvez toujours le remplacer par empyreumatique. </p>

</dd>


<dt class="blanc">Mercuriale<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>

<dd><p>Réprimande sévère que l'on fait à quelqu'un. </p>

</dd>


<dt class="bleu">Mésaxonien<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Se dit des animaux pourvus de sabots et qui ont un nombre impair de doigts. </p>

</dd>

<dt class="blanc">Métromane<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Personne qui a la manie de faire des vers (tel M. Jourdain). </p>

</dd>


<dt class="bleu">Mirabile Dictu<em><nolink>Catégorie : Citation latine | Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>«&nbsp;Chose étonnante à dire&nbsp;!&nbsp;»&nbsp;: s'emploie ordinairement par antiphrase et dans le style plaisant, à propos d'une chose qui est au fond peu étonnante. <br />

Mirabile visu (chose admirable à voir) se dit à peu près dans le même cas. </p>

</dd>


<dt class="blanc">Mirabile Visu<em><nolink>Catégorie : Citation latine | Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Ironiquement, chose admirable à voir. </p>

</dd>


<dt class="bleu">Misonéiste<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Tendance d'esprit ou attitude systématique d'hostilité à l'innovation, au changement (dans les habitudes et les préjugés établis). </p>

</dd>


<dt class="blanc">Modus Operandi<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>Modus operandi (MO) est une phrase latine, traduite approximativement par «&nbsp;mode d'opération&nbsp;». Le pluriel est modi operandi («&nbsp;modes d'opération&nbsp;»). Cette expression est aussi utilisée dans le contexte policier pour décrire un mode de fonctionnement typique d'un criminel et ses façons d'agir. </p>

</dd>


<dt class="bleu">Motu Proprio<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>De son propre mouvement. <br />
C'est l'expression par laquelle on désigne, dans le droit canon, une résolution prise par le pape, de son propre mouvement, en dehors de toute influence étrangère. </p>

</dd>


<dt class="blanc">Moult</dt>
<dd><p>À foison, en quantité. </p>

</dd>


<dt class="bleu">Munificence<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Disposition qui porte à donner largement&nbsp;; grandeur dans la générosité. <br />

<em>Attention&nbsp;: s'écrit munificence, à ne pas confondre avec magnificence, qui caractérise ce qui est magnifique. </em></p>

</dd>


<dt class="blanc">Musagète<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Ne s'emploie guère que dans l'expression Apollon musagète&nbsp;: Apollon musagète («&nbsp;conducteur des muses&nbsp;») instruit les muses à leurs arts et les conduit au Parnasse. </p>

</dd>


<dt class="bleu">Mutatis Mutandis<em><nolink>Catégorie : Citation latine | Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Mutatis mutandis est une locution latine, signifiant littéralement&nbsp;: «&nbsp;ce qui devait changer ayant été changé&nbsp;», et que l'on pourrait traduire de façon plus limpide par&nbsp;: «&nbsp;Une fois effectués les changements nécessaires&nbsp;», voire par «&nbsp;sans autre forme de procès&nbsp;». Cette locution indique donc au lecteur que l'on va procéder à une analogie, à un rapprochement de deux situations similaires — desquelles on soustraira volontairement les dissemblances — «&nbsp;devant être changées&nbsp;» pour qu'un réel rapprochement puisse avoir lieu. </p>

</dd>


<dt class="blanc">Mystagogie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Initiation aux mystères de la religion, de la magie, de l'occultisme. </p>

</dd>


<dt class="bleu">Mystagogue<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Prêtre qui initiait aux mystères sacrés de la religion chez les grecs. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="n">n</a></h3>
<dl>
<dt class="blanc">Néphrétique</dt>
<dd><p>Qui provient des reins. </p>

</dd>


<dt class="bleu">Nonobstant<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Tout simplement une façon évoluée de dire «&nbsp;Malgré, en faisant fi de&nbsp;». </p>

</dd>


<dt class="blanc">Numismatique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La numismatique (du grec ancien &#957;&#965;&#956;&#953;&#963;&#956;&#945;, la monnaie légale) est la science des monnaies et médailles. Elle est particulièrement utile pour les recherches en histoire ancienne (notamment romaine ou grecque) et elle sert aussi en archéologie comme critère de datation. La collection de monnaies a été pratiquée depuis l'antiquité, mais les premières collections parvenues jusqu'à nos jours datent du XVIIe siècle. </p>

<p>Le numismate étudie les pièces et les médailles, il est appelé a tort collectionneur de pièces. </p>

</dd>


<dt class="bleu">Nutritif</dt>

<dd><p>Lié à l'assimilation par l'organisme des substances nécessaires à sa survie. </p>

</dd>


<dt class="blanc">Nycthémère<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Le nycthémère, ou nyctémère, (du grec nukhthêmeron, mot composé à partir de nux, nuktos, «&nbsp;nuit&nbsp;», et hêmera, «&nbsp;jour&nbsp;») est un terme technique utilisé en physiologie et en médecine, ou en science vétérinaire et en écologie pour désigner une alternance d'un jour et d'une nuit et correspondant à un cycle biologique de 24&nbsp;heures comprenant chez la plupart des espèces complexes une période de veille et une période de sommeil correspondant à un jour et à une nuit. </p>

<p>Certaines professions occasionnent ce qu'on appelle des «&nbsp;troubles&nbsp;» du nycthémère notamment les travaux en horaires décalés. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="o">o</a></h3>
<dl>
<dt class="bleu">O tempora o mores<em><nolink>Catégorie : Citation latine | Rhétorique</nolink></em></dt>

<dd><p>Ô temps&nbsp;! Ô m&oelig;urs&nbsp;! <br />
À propos de Catilina, Cicéron s'élève énergiquement contre la complicité morale de la société qui permettait d'oser les plus énormes attentats&nbsp;: «&nbsp;Dans quel siècle vivons-nous&nbsp;! s'écrie l'orateur, o tempora&nbsp;! o mores&nbsp;!&nbsp;»</p>

</dd>

<dt class="blanc">Obédience<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Une obédience (du latin ob&oelig;dientia, obéissance) désigne l'obéissance due à un supérieur, et par extension l'appartenance à un groupe. </p>

</dd>


<dt class="bleu">Oblatif<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Qui s’offre à l’autre, qui donne la priorité à la satisfaction des besoins de l’autre. </p>

</dd>


<dt class="blanc">Oblativité<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Conduite altruiste dans laquelle le sujet cherche à satisfaire son prochain sans demande de contrepartie. </p>

</dd>

<dt class="bleu">Obsolescence<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>En économie, l’obsolescence (anglicisme) est le fait pour un produit d’être périmé, et donc de perdre toute valeur, du simple fait de l’évolution technique ou de la mode, même si le produit est en parfait état de fonctionnement. Ainsi la règle à calcul a été supplantée par la calculatrice électronique en très peu de temps parce qu’elle fut complètement dépassée techniquement. </p>

<p>Attention&nbsp;: le terme obsolescence (et par conséquence obsolescent) ne s’applique qu’à une machine, un équipement (quelque chose de «&nbsp;concret&nbsp;»), il ne s’emploie pas pour une «&nbsp;idée&nbsp;», une «&nbsp;abstraction&nbsp;» (mais dans ces cas, le terme obsolète continue, lui, de s’appliquer). </p>

</dd>


<dt class="blanc">Obsolète</dt>
<dd><p>Qui est hors d'usage, en parlant d'un mot, d'une locution. </p>

</dd>


<dt class="bleu">Odalisque<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Une odalisque était une esclave vierge, qui pouvait monter jusqu'au statut de concubine ou de femme dans les sérails ottomans, mais dont la plupart étaient au service du harem du sultan. Le mot vient du turc odal&#305;k, qui signifie «&nbsp;femme de chambre&nbsp;», de oda, «&nbsp;chambre&nbsp;». En littérature, le terme désigne une femme de harem. </p>

<p>Dans l'usage populaire, le mot odalisque peut aussi faire allusion, à la maîtresse, la concubine, ou la petite amie d'un homme riche, ce qui est inexact étant donné que ces esclaves étaient vierges. </p>

</dd>


<dt class="blanc">Oecuménique</dt>

<dd><p>L'adjectif œcuménique (ce qui s'étend sur «&nbsp;toute la terre habitée&nbsp;») désigne&nbsp;: </p>

<ul>
<li>ce qui est relatif à l'œcuménisme, mouvement de dialogue et de rapprochement entre les diverses Églises chrétiennes&nbsp;; </li>
<li>ce qui est relatif à un concile œcuménique ou général, c'est-à-dire qui concerne l'ensemble de l'Église. </li>
</ul>
</dd>


<dt class="bleu">Oligarchique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>L'oligarchie (nom féminin) &ndash; du grec oligos (peu nombreux) et arkhê (commandement) &ndash; est une forme de gouvernement dans laquelle la plupart des pouvoirs sont détenus par une petite partie de la société (typiquement la plus puissante, que ce soit par richesse, force militaire, cruauté ou influence politique). </p>

</dd>


<dt class="blanc">Onirique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>L'adjectif «&nbsp;onirique&nbsp;» vient du nom grec «&nbsp;oneiros&nbsp;», qui signifie le «&nbsp;songe&nbsp;» ou le «&nbsp;rêve&nbsp;». Utilisé d'abord en psychanalyse, ce terme est passé dans le vocabulaire littéraire et pictural avec les surréalistes et André Breton. </p>

<p>En peinture, il a été fréquemment utilisé pour qualifier l'œuvre de peintres ou de lithographes comme Salvador Dalí, Jean-Pierre Alaux, Pierre Henry, Louis Vuillermoz. </p>

</dd>


<dt class="bleu">Ordre Lexicographique</dt>
<dd><p>Un ordre lexicographique est un ordre que l'on définit sur les suites finies d'éléments d'un ensemble ordonné (ou, de façon équivalente, les mots construits sur un ensemble ordonné). Sa définition est une généralisation de l'ordre du dictionnaire&nbsp;: l'ensemble ordonné est l'alphabet, les mots sont bien des suites finies de lettres de l'alphabet. </p>

</dd>


<dt class="blanc">Ossianique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Relatif à la poésie d'Ossian. <br />
Ossian, barde écossais du IIIe siècle, fils de Fingal, serait l’auteur d’une série de poèmes dits «&nbsp;gaéliques&nbsp;» traduits et publiés en anglais entre 1760&nbsp;et 1763&nbsp;par le poète James Macpherson, qui eurent un énorme retentissement dans toute l'Europe. Leur authenticité est contestée, certains y voyant une supercherie littéraire de Macpherson. Ces poèmes stimulèrent l’intérêt pour l’histoire ancienne et la mythologie celtique, et ce dans toute l'Europe (il s'agissait d'une des lectures préférées de Napoléon). </p>

</dd>


<dt class="bleu">Ostentatoire</dt>
<dd><p>Qui cherche à se faire remarquer et fait étalage d'un avantage ou d'une qualité. </p>

</dd>


<dt class="blanc">Ostracisme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Action d'exclure quelqu'un d'un groupe, d'un parti, de le tenir à l'écart. <br />
Ainsi, dans la cours de récré, lorsqu’on a du vocabulaire, il convient de dire&nbsp;: «&nbsp;l’ostracisme dont vous faites preuve envers moi mérite la délation à l’institutrice&nbsp;» plutôt que « arrêtez de m’embêter où je le dis à la maîtresse». C'est ça la culture&hellip; </p>

</dd>


<dt class="bleu">Outrecuidance</dt>
<dd><p>Confiance excessive en soi même. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="p">p</a></h3>

<dl>
<dt class="blanc">Palilalie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>La palilalie concerne généralement la répétition rapide de syllabes, parfois de mots, et lorsqu'il s'agit de la répétition de segments plus complexes, on parle de paliphrasie. </p>

</dd>


<dt class="bleu">Palinodique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Une palinodie (du grec <em>palin</em>, de nouveau, et <em>ôdê</em>, chant) est un texte dans lequel on contredit ce que l'on avait affirmé auparavant. Indique aussi un brusque changement d'opinion. </p>

<p>Par extension, faire une palinodie c'est se contredire volontairement &ndash; ce qui suppose en principe une intention didactique. </p>

<p>Voir dans le Phèdre de Platon la célèbre palinodie de Socrate. </p>

</dd>


<dt class="blanc">Pamphlétaire<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Un pamphlet est un texte à la fois court et virulent qui remet en cause l'ordre établi. <br />

Une expression pamphlétaire sert donc à faire une remarque potentiellement agressive, ou tout au moins volontairement polémique. </p>

</dd>


<dt class="bleu">Pandémonium<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Pandémonium désigne la capitale imaginaire des enfers où Satan invoque le conseil des démons. Depuis, ce mot est également utilisé pour désigner un lieu où règne corruption, chaos et désordre. </p>

</dd>


<dt class="blanc">Panégyriste<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Personne qui fait l'éloge, souvent de façon excessive, de quelqu'un, de quelque chose. </p>

</dd>


<dt class="bleu">Pantalonnade<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Une pantalonnade désigne à l'origine la manière de jouer de Pantalon, célèbre Géronte de {commedia dell'arte} aux comportements souvent excessifs. Maintenant, qualifie la manifestation hypocrite d'un sentiment, voire une boufonnerie grossière. </p>

</dd>


<dt class="blanc">Pantomime</dt>
<dd><p>La pantomime est une forme d'expression par geste sans recours à la parole. Par extension, une pantomime est un comportement outré, ridicule. </p>

</dd>


<dt class="bleu">Papelard<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Hypocrite, faussement dévot. </p>

</dd>


<dt class="blanc">Paradigmatique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>De <em>paradigme</em>&nbsp;: exemple parfait. <br />
Ensemble de problèmes à étudier et des techniques propres à leur étude. </p>

</dd>


<dt class="bleu">Paralogisme</dt>
<dd><p>Le paralogisme est un raisonnement faux qui apparait comme rigoureux, mais où le locuteur est de bonne foi, contrairement au sophisme pour lequel il y a une volonté de tromper. </p>

</dd>


<dt class="blanc">Parangon<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>En littérature, le terme parangon est un nom commun. </p>

<p>Le terme, apparu en français en 1504, provient de l'espagnol parangon (comparer) et du grec ancien &#960;&#945;&#961;&#945;&#954;&#959;&#957;&#951; (parakonê, pierre à aiguiser). <br />
Un parangon est tout simplement un modèle, un archétype d'un certain genre, voire une caricature si utilisé péjorativement. </p>

</dd>


<dt class="bleu">Paraphrénie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>La paraphrénie est une psychose chronique non dissociative responsable d'un état délirant imaginatif qui se différencie des autres psychoses chroniques (comme la schizophrénie) par la c&oelig;xistence d'une intense activité délirante limitée à certains domaines de la vie intellectuelle (définition à lire deux fois pour bien comprendre). </p>

</dd>


<dt class="blanc">Parèdre<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Parèdre (transcription du grec ancien &#960;&#940;&#961;&#949;&#948;&#961;&#959;&#962; / páredros) est un nom ou adjectif signifiant littéralement «&nbsp; assis près&nbsp;», «&nbsp;qui est assis à côté de&nbsp;». Il s'emploie pour qualifier une divinité souvent inférieure en prérogative, habituellement associée dans le culte à un dieu ou une déesse plus influent. Cependant l'usage général tend à appeler parèdre le ou la consort d'une déité, qui peut lui être égale ou complémentaire. </p>

<p>Dans la mythologie égyptienne, pratiquement toutes les divinités étaient associées par paires et fréquemment de même racine nominale (comme dans l’Ogdoade d'Hermopolis). </p>

</dd>


<dt class="bleu">Paronomase<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>En rhétorique, la figure de style qui consiste à rapprocher des paronymes (e.g. «&nbsp;pâtisserie&nbsp;» / «&nbsp;tapisserie&nbsp;») au sein du même énoncé est la paronomase. De par son pouvoir fortement «&nbsp;accrocheur&nbsp;», elle est amplement utilisée dans tout ce qui a vocation à être court tout en étant efficace&nbsp;: les publicités, les proverbes, les titres, etc. </p>

<p>Elle est aussi très courante dans les calembours, où l'on parle d'à-peu-près. </p>

</dd>


<dt class="blanc">Paroxystique</dt>
<dd><p>(Identique à paroxysmique. )<br />
Qui a atteint son maximum, son point culminant, son apogée, bref&nbsp;: son paroxysme. </p>

</dd>


<dt class="bleu">Pasquinade<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Affiche satirique qu’on attachait à la statue de Pasquin à Rome. <br />
Désigne une raillerie bouffonne et triviale, un écrit satirique ou une épigramme malicieuse. </p>

</dd>


<dt class="blanc">Patelin<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Celui qui tâche, par des flatteries et de belles paroles, de tromper, ou simplement d'en venir à ses fins. <br />
Remarque&nbsp;: le patelin flatte et trompe. Le papelard trompe aussi, mais c'est en simulant la dévotion. </p>

</dd>


<dt class="bleu">Pathos<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Pathos est un mot grec qui signifie «&nbsp;souffrance, passion&nbsp;». <br />

C'est la partie de la rhétorique qui traite des moyens propres à émouvoir l'auditeur. <br />
Familièrement, recherche inopportune d'effets de style dramatique&nbsp;; propos pleins d'emphase et peu clairs. </p>

</dd>


<dt class="blanc">Pédotribe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Dans les gymnases de l'antiquité, celui qui connaissait bien les man&oelig;uvres propres à chaque exercice, de manière à pouvoir enseigner comment il fallait l'exécuter, sans savoir cependant quel effet il produisait sur la santé de celui qui s'exerçait. </p>

</dd>


<dt class="bleu">Pensum</dt>
<dd><p>Travail supplémentaire donné comme punition à un élève. Par extension&nbsp;: travail (surtout de lecture ou d'écriture) fastidieux. </p>

</dd>


<dt class="blanc">Périssodactyle<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Animal appartenant à un ordre des mammifères ongulés caractérisé par un nombre impair de doigts aux membres postérieurs et comportant les damans, les équidés, les tapirs et les rhinocéros. </p>

</dd>


<dt class="bleu">Périssologie<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>La périssologie est une figure de rhétorique qui désigne l'usage de pléonasmes sans intention littéraire. </p>

</dd>

<dt class="blanc">Péronnelle</dt>
<dd><p>Terme familier dont on se sert en parlant d’une jeune femme sotte et bavarde. </p>

</dd>


<dt class="bleu">Péroraison<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Peut désigner la conclusion d'un discours, ou un discours ennuyeux et pédant. </p>

</dd>


<dt class="blanc">Persifleur</dt>
<dd><p>Celui qui persifle, i.e.qui parle avec ironie, avec moquerie. </p>

</dd>


<dt class="bleu">Pétaudière</dt>

<dd><p>Assemblée où règnent la confusion et le désordre. </p>

</dd>


<dt class="blanc">Pétulance</dt>
<dd><p>Action d'être extraverti. </p>

</dd>


<dt class="bleu">Philippique<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>De Philippe&nbsp;: terme emprunté aux harangues de Démosthène contre Philippe de Macédoine. <br />
Discours violent et satirique. </p>

</dd>


<dt class="blanc">Philistin</dt>

<dd><p>Les Philistins (Assyrien Palastu ou Pilistu, hébreu&nbsp;: <em>&#1508;&#1456;&#1468;&#1500;&#1460;&#1513;&#1456;&#1473;&#1514;&#1460;&#1468;&#1497;&#1501;</em> &ndash; pelišt&#299;m, en arabe&nbsp;: <em>&#1601;&#1604;&#1587;&#1591;&#1610;&#1606;&#1610;&#1608;&#1606;</em> &ndash; filas&#7789;&#299;n&#299;un) sont un peuple de l'Antiquité connus par différentes sources textuelles (assyriennes, hébraïques, égyptiennes) ou archéologiques. </p>

<p>Les Philistins apparaissent dans les sources égyptiennes au <span class="century">XII</span><sup>e</sup> siècle avant J.-C., et sont présentés comme des ennemis de l'Égypte venus du nord, mélangés à d'autres populations hostiles connues collectivement des anciens égyptiens sous le nom de peuples de la mer. </p>

<p>Après leurs affrontements avec les Égyptiens, les Philistins se sont fixés sur la bande côtière du sud-ouest de la terre de Canaan, c'est-à-dire dans une région centrée sur l'actuelle bande de Gaza. </p>

<p>Leurs cités ont dominé la région jusqu'à la conquête assyrienne de Teglath-Phalasar III en 732 avant J.-C. Ils sont par la suite soumis aux empires régionaux, et semblent progressivement s'y assimiler. Les dernières mentions des Philistins datent du <span class="century">II</span><sup>e</sup> siècle avant J.-C., dans le premier des Livres des Macchabées. </p>

<p>La langue des Philistins reste inconnue, dans la mesure où on ne leur connaît aucune production textuelle. Il est possible que ce soit à l'origine une langue Indo-Européenne, mais les preuves en sont ténues. </p>

<p>Désigne une personne à l'esprit vulgaire, fermée aux lettres, aux arts, aux nouveautés. </p>

</dd>


<dt class="bleu">Pie grièche</dt>
<dd><p>Lanius est le nom de genre des pies-grièches, dérivé du latin boucher. Ce nom fait référence au comportement de ces espèces qui plantent leurs proies (comme des insectes) à une épine ou une branche pointue d'un arbuste. (L'adjectif &quot;grièche&quot; ne s'emploie que pour cette pie et pour une ortie. Ce n'est pas flatteur&nbsp;! )</p>

<p>Par extension, désigne une femme acariâtre et querelleuse. </p>

</dd>


<dt class="blanc">Plénipotentiaire</dt>
<dd><p>Celui qui est chargé des pleins pouvoirs d’un chef d’état ou d’un gouvernement, pour quelque négociation avec une puissance étrangère. Le mot peut s'employer à la fois comme un nom commun (plénipotentiaire du royaume de&hellip; ) ou comme un adjectif (le représentant plénipotentiaire). </p>

</dd>


<dt class="bleu">Pléonasme<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Dire deux fois la même chose en se répétant. (Ceci est une définition auto-exemplative. )</p>

</dd>


<dt class="blanc">Pléthore<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Abondance excessive de choses, de gens. </p>

</dd>

<dt class="bleu">Ploutocrate<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Désigne ceux, celles qui exercent le pouvoir par l'argent et pour l'argent. <small>(mais&hellip; c'est encore le portrait de Yannish&nbsp;! )</small></p>

</dd>


<dt class="blanc">Poissarde</dt>

<dd><p>Femme qui emploie un langage grossier. </p>

</dd>


<dt class="bleu">Polydipsie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La polydipsie est un symptôme rencontré en endocrinologie et caractérisé par une soif excessive avec augmentation de l'absorption de liquide, causée par la polyurie dans le cas du diabète sucré, ou par un dérèglement du centre hypothalamique de la soif en cas de diabète insipide. </p>

</dd>

<dt class="blanc">Polymathique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui a rapport à la polymathie, i.e.qui est multiple et varié. </p>

</dd>


<dt class="bleu">Polymorphe</dt>
<dd><p>Qui peut prendre des formes diverses. </p>

</dd>


<dt class="blanc">Pouacre<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Personne très laide, très sale, répugnante. En l'adjectivant, peut désigner une chose. Un mot dont la sonorité seule est déjà très évocatrice&hellip; (d'où l'onomatopée poueerk). </p>

</dd>


<dt class="bleu">Pourfendeur</dt>
<dd><p>Vient du latin pourfendius, titre donné par un centurion à l'un de ses ennemis viking maniant une large épée à deux mains&hellip; <br />
Le pourfendeur est celui qui pourfend (fendre un homme de haut en bas d’un coup de sabre ou de cimeterre). Le terme n’est guère usité que d’une manière ironique et familière&hellip; </p>

</dd>


<dt class="blanc">Prévarication<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>En droit, manquement (par intérêt) d'un responsable aux devoirs induits par sa fonction. </p>

</dd>


<dt class="bleu">Primesautier<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui se détermine spontanément, qui agit, qui parle ou qui écrit sans délibération, sans réflexion préalable. </p>

</dd>

<dt class="blanc">Privauté<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Familiarité malséante à l'égard de quelqu'un dont on ne partage pas l'intimité. <br />
Familiarité, liberté, souvent jugée déplacée, qu'un homme se permet avec une femme. </p>

</dd>


<dt class="bleu">Procrastination<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Action de reporter, de remettre à plus tard ce qui pourrait être fait le moment même. </p>

</dd>


<dt class="blanc">Prodromique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>En médecine, la phase prodromique désigne la période d'une maladie pendant laquelle un ensemble de symptômes avant-coureurs, généralement bénins, annoncent la survenue de la phase principale de cette maladie. <br />
Par extension, qui annonce un événement. </p>

</dd>


<dt class="bleu">Prolixité<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Ce qui est en trop, inutile, lorsque l'on parle longtemps ou écrit trop. </p>

</dd>


<dt class="blanc">Prophylaxique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Mesures à prendre pour prévenir une maladie. </p>

<p>Une prophylaxie désigne le processus actif ou passif ayant pour but de prévenir l'apparition ou la propagation d'une maladie. Le terme fait aussi bien référence à des procédés médicamenteux qu'à des campagnes de prévention ou à des «&nbsp;bonnes pratiques&nbsp;» adaptées. La prophylaxie peut être l'initiative d'une personne qui s'est exposée à un risque. Il ne s'agit pas d'un traitement médical&nbsp;: une prophylaxie peut amener à suivre un tel traitement, mais il s'agit avant tout d'un processus liant la prise de conscience d'un risque constaté ou pressenti à une réponse médicale ou santé publique. </p>

<p>Types de prophylaxie&nbsp;: </p>

<ul>
<li>la prophylaxie primaire doit empêcher l'apparition d'une maladie chez une personne&nbsp;; </li>

<li>la prophylaxie secondaire doit empêcher une rechute chez une personne. </li>
</ul>
<p>La prophylaxie concerne aussi bien les maladies infectieuses que les accidents du travail, les parasitoses ou le développement psychomoteur. </p>

<p>À ce titre, les campagnes de vaccination systématique (B.C.G. , variole, <em>etc. </em>), la déclaration de certaines maladies contagieuses, ainsi que les démarches de prévention diverses d'hygiène de vie (anti-alcoolique, anti-tabac&hellip; ), la médecine du travail, le dépistage précoce de certaines maladies (cancer, par exemple), les rééducations en milieu psychiatrique, <em>etc. </em>, sont autant d'entreprises prophylactiques. </p>

</dd>


<dt class="bleu">Prosélytisme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Le prosélytisme désigne le zèle dont font preuve certains, en vue de rallier des personnes à une cause. </p>

</dd>


<dt class="blanc">Protéiforme<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Vient de Protée, dieu grec marin qui pouvait changer de forme. Désigne quelque chose (ou quelqu'un) susceptible de prendre plusieurs formes, et/ou d'en changer fréquemment. </p>

</dd>


<dt class="bleu">Psittacisme<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Le terme psittacisme a pour origine latine psittacus, qui signifie perroquet. Il est employé pour qualifier la répétition mécanique d'expressions, phrases ou formules par un sujet, qui ne les comprend pas nécessairement. </p>

</dd>

<dt class="blanc">Psychopompe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>du Grec &#968;&#965;&#967;&#959;&#960;&#959;&#956;&#960;ó&#962; (psuchopompos), littéralement «&nbsp;guide des âmes&nbsp;»&nbsp;; c'est le conducteur des âmes des morts. </p>

</dd>

<dt class="bleu">Psychotrope<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Substance qui agit sur le psychisme, sur l'état du système nerveux central et y induit des modifications de la perception, des sensations, de l'humeur, de la conscience ou d'autres fonctions psychologiques et comportementales. </p>

</dd>


<dt class="blanc">Putatif</dt>
<dd><p>Qui est supposé avoir une existence légale, qui est réputé être ce qu’il n’est pas. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="q">q</a></h3>
<dl>
<dt class="bleu">Q.E.D.<em><nolink>Catégorie : Citation latine | Acronyme | Rhétorique</nolink></em></dt>
<dd><p>Les initiales de ces trois mots, Q.E.D. , <em>Quod Erat Demonstrandum</em> (ce qui était à démontrer) se trouvent dans un assez grand nombre de livres scientifiques anglophones. <br />

L'auteur commence par énoncer une proposition, il la démontre et répète l'énoncé, en ajoutant&nbsp;: «&nbsp;ce qui était à démontrer&nbsp;». <br />
En français, on lui préfère souvent C.Q.F.D.</p>

</dd>


<dt class="blanc">Que nenni</dt>
<dd><p>Expression un peu désuète héritée de l'époque médiévale. À l'origine, l'expression était synonyme de «&nbsp;non&nbsp;», puis le temps passant, elle a pris la connotation «&nbsp;pas du tout&nbsp;»&nbsp;: «&nbsp;tu n'y es pas du tout&nbsp;!&nbsp;»</p>

</dd>


<dt class="bleu">Qui scribit bis legit<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Celui qui écrit lit deux fois. <br />
Benjamin Franklin a amélioré cette expression, que l'on retrouve maintenant souvent sur les forums du Net&nbsp;: <br />
«&nbsp;Tu me dis, j'oublie. Tu m'enseignes, je me souviens. Tu m'impliques, j'apprends&nbsp;». </p>

</dd>


<dt class="blanc">Qui tacet consentire videtur<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>Locution latine signifiant&nbsp;: <br />
«&nbsp;qui se tait semble consentir&nbsp;» ou «&nbsp;qui ne dit mot consent&nbsp;». </p>

</dd>


<dt class="bleu">Quid<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Le mot quid signifie quoi en latin. </p>

</dd>


<dt class="blanc">Quid novi<em><nolink>Catégorie : Citation latine</nolink></em></dt>

<dd><p>Du latin, veut dire en français &quot;quoi de neuf&quot;. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="r">r</a></h3>
<dl>
<dt class="bleu">Rasséréner</dt>
<dd><p>Rendre de nouveau serein, ramener à la sérénité, au calme. </p>

</dd>


<dt class="blanc">Ratiocination<em><nolink>Catégorie : Mot complexe | Rhétorique</nolink></em></dt>
<dd><p>Raisonnement trop subtil. (Faux ami avec l'anglais, où il signifie «&nbsp;raisonnement bien pensé&nbsp;». )</p>

</dd>


<dt class="bleu">Récapépèter<em><nolink>Catégorie : Néologisme Lachalien</nolink></em></dt>
<dd><p>Infantilisation du verbe &quot;répéter&quot;. </p>

</dd>


<dt class="blanc">Rédhibitoire</dt>
<dd><p>(Figuré) Qui empêche une chose, qui a un gros défaut et qui de ce fait est inacceptable. </p>

</dd>


<dt class="bleu">Redondant</dt>
<dd><p>Qui se répète, qui emploie une quantité de symboles supérieure au nécessaire pour transmettre une information</p>

</dd>


<dt class="blanc">Relou</dt>

<dd><p>&quot;Relou&quot; est un mot verlan (langage des rues semblable à un ver lent grignotant doucement&hellip; ) signifiant &quot;lourd&quot;. Dans un contexte particulier, désigne une action/personne qui a fait/dit une chose qui a déplu à l'émetteur de ce mot. </p>

</dd>


<dt class="bleu">Remugle</dt>
<dd><p>Odeur de renfermé. </p>

</dd>


<dt class="blanc">Résipiscence<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Fait de reconnaître qu'on a commis une faute, accompagné de la résolution de s'amender. L'expression consacrée quand on agit de la sorte est «&nbsp;venir à résipiscence&nbsp;», et quand on fait agir quelqu'un&nbsp;: «&nbsp;amener à résipiscence&nbsp;». Mot emprunté au latin ecclésiastique resipiscentia, lui-même dérivé de resipiscere, «&nbsp;reprendre ses sens, revenir à soi, se remettre, se repentir&nbsp;», lui-même formé de re et de sapere, «&nbsp;avoir de l'intelligence, du jugement&nbsp;». </p>

</dd>


<dt class="bleu">Rhéteur<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>(Commun) Un rhéteur dans l'antiquité, est un orateur qui enseigne l'art de bien parler. Ce mot est aussi utilisé plus généralement pour celui qui pratique la rhétorique. Il sait discourir et déclamer pour convaincre en s'attachant à la forme et au fond suivant certains préceptes d’éloquence (à l'oral comme à l'écrit). </p>

<p>(Péjoratif) Personne dont toute l’éloquence consiste dans un style apprêté, affété, emphatique et déclamatoire. </p>

</dd>

<dt class="blanc">Rhétorique<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>La rhétorique (du grec ancien &#8165;&#951;&#964;&#959;&#961;&#953;&#954;&#8052; [&#964;&#941;&#967;&#957;&#951;] / rhêtorik&#7873; [tékhnê], «&nbsp;technique/art oratoire&nbsp;») désigne au sens propre l'art de bien parler, l'art ou la technique de persuader, généralement au moyen du langage. </p>

</dd>


<dt class="bleu">Rimbou</dt>
<dd><p>Verlan du mot argotique «&nbsp;bourrin&nbsp;» Se dit d'un système particulièrement lent, lourd, et qui ne fait pas dans la dentelle. Utilise souvent la force brute et l'ignorance massive. </p>

</dd>


<dt class="blanc">Rodomontade<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Quand vous hésitez entre les qualificatifs «&nbsp;moron&nbsp;» (un emprunt à l'anglais), menteur, et «&nbsp;jeteur de poudre aux yeux&nbsp;», choisissez rodomont&nbsp;! <br />
Apprenez que ce mot vient de Rodomont, personnage de l’Arioste. <br />
Ainsi, ne dites plus &quot;quel hâbleur ce type&quot;, mais &quot;cette espèce de rodomont me gonfle&quot;. Voici le seul extrait pompé sur le net illustrant l'utilisation de ce mot, qui risque de disparaître de la langue francaise&hellip; </p>

<p>Henri IV ayant dit un jour à l'ambassadeur d'Espagne&nbsp;: &quot;Ventre-saint-gris&nbsp;! Si le roi d'Espagne me fâche, je l'irai relancer jusque dans Madrid&quot;, et l'ambassadeur lui ayant répondu avec désinvolture&nbsp;: &quot;Vous ne servez point le premier roi de France qui y aurait été&amp;quot&nbsp;; le Béarnais ajouta sur un ton moins furieux&nbsp;: &quot;Monsieur l'ambassadeur, vous êtes Espagnol, et moi Gascon. Si nous nous mettons sur la rodomontade, la chose ira loin. &quot;</p>

</dd>


</dl>
<h3 class="Lettre"><a href="s">s</a></h3>
<dl>
<dt class="bleu">Sagouin</dt>
<dd><p>Singe. </p>

</dd>


<dt class="blanc">Sapajou</dt>

<dd><p>Encore un nom vernaculaire donné à plusieurs espèces de singes (cf. semnopithèques, sagouin). </p>

</dd>


<dt class="bleu">Sarcasme<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Le sarcasme désigne une moquerie ironique, une raillerie tournant en dérision une personne ou une situation. Il est mordant, souvent même amer et blessant. Il peut être considéré comme une forme d'ironie piquante ou belliqueuse. </p>

</dd>

<dt class="blanc">Sardonique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Sarcastique, qui exprime une moquerie méchante. </p>

</dd>


<dt class="bleu">Satisfecit<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Mot emprunté du latin, le satisfecit est une attestation donnée en témoignage de satisfaction, originellement par un professeur à son élève pour son travail. </p>

</dd>


<dt class="blanc">Satrape<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Personne immensément riche qui mène une vie luxueuse et opulente et qui exerce une autorité despotique. </p>

</dd>


<dt class="bleu">Semnopithèque<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Semnopithèque est un nom générique utilisé pour caractériser plusieurs espèces de singes. </p>

</dd>


<dt class="blanc">Sibyllin</dt>
<dd><p>Qui est énigmatique et obscur. </p>

</dd>


<dt class="bleu">Sigisbée</dt>
<dd><p>Galant et dameret, le sigisbée sert de compagnon attitré à une femme mariée pour l'accompagner dans ses sorties à l'extérieur en l'absence de son mari. En véritable cavalier servant, il entoure la dame de ses soins assidus&hellip; et est souvent son amant. </p>

</dd>


<dt class="blanc">Simiesque</dt>
<dd><p>Qui rappelle le singe (qui joue la comédie). </p>

</dd>


<dt class="bleu">Stentor<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Dans la mythologie grecque, Stentor (en grec ancien &#931;&#964;&#941;&#957;&#964;&#969;&#961; / Sténtôr) est le crieur de l'armée des Grecs lors de la guerre de Troie. </p>

<p>Son nom vient du verbe &#963;&#964;&#941;&#957;&#949;&#953;&#957; / sténein qui signifie «&nbsp;gémir profondément et bruyamment, mugir&nbsp;». <br />

Il reste dans l'expression populaire «&nbsp;avoir une voix de Stentor&nbsp;» qui, dès l'Antiquité, signifie avoir une voix très puissante, retentissante et parfaitement audible. </p>

<p>Il n'apparaît pourtant qu'une seule fois dans la littérature grecque et de manière indirecte, lorsque, au chant V de l'Iliade, Héra revêt son apparence pour encourager les Achéens&nbsp;: </p>


<div class="verse">
<p>  «&nbsp; Héra, la déesse aux bras blancs, s'arrêta et, prenant<br />
Les traits du valeureux Stentor, qui, de sa voix de bronze, <br />

Faisait autant de bruit que cinquante hommes, s'écria (&hellip; )&nbsp;»</p>


</div>
<p>Il partage avec Achille sa «&nbsp;voix de bronze&nbsp;». </p>

<p>Les scholiastes d'Homère précisent que Stentor est d'origine thrace, qu'il est le premier à se servir d'une conque comme trompette de guerre et qu'il est mis à mort après avoir été vaincu par le dieu Hermès dans une joute vocale. </p>

</dd>


<dt class="blanc">Sternutation<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Éternuement. </p>

</dd>


<dt class="bleu">Stipendié<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Participe passé de &quot;stipendier&quot;&nbsp;: payer quelqu'un pour l'exécution d'une mauvaise action. </p>

</dd>


<dt class="blanc">Stomoxe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Mouche piqueuse mesurant de 6 à 8&nbsp;mm susceptible de transmettre notamment le bacille du charbon</p>

</dd>


<dt class="bleu">Stricto Sensu<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>Stricto sensu (ou sensu stricto) est une locution latine qui signifie au sens strict. Par opposition, lato sensu veut dire au sens large. </p>

</dd>


<dt class="blanc">Subliminal</dt>

<dd><p>Une perception subliminale est une perception inconsciente, ou encore non visible consciemment. </p>

</dd>


<dt class="bleu">Subodorer</dt>
<dd><p>Émettre une hypothèse, pressentir, se douter de. </p>

</dd>


<dt class="blanc">Subrepticement</dt>
<dd><p>D'une manière subreptice, en se cachant. </p>

</dd>


<dt class="bleu">Sui Generis<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>Sui generis est un terme latin de droit, signifiant «&nbsp;de son propre genre&nbsp;». C'est un problème de taxinomie juridique. Cela qualifie une situation juridique dont la singularité prévient tout classement dans une catégorie déjà répertoriée et nécessite de créer des textes spécifiques. </p>

</dd>


<dt class="blanc">Superfétatoire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui s'ajoute inutilement. </p>

</dd>


<dt class="bleu">Superfluité</dt>

<dd><p>Abondance excessive et inutile, caractère de ce qui est superflu. </p>

</dd>


<dt class="blanc">Supplétif<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui complète, qui sert de supplément. </p>

</dd>

<dt class="bleu">Surnuméraire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Qui est en surnombre. </p>

</dd>


<dt class="blanc">Sustine et abstine<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>«&nbsp;Souffre et abstiens-toi&nbsp;»&nbsp;; telle était la maxime des stoïciens, tel était le but constant de leurs efforts&nbsp;: le silence des passions, un empire absolu de la raison sur toutes les affections charnelles, l'apathie en un mot, qui n'est pas une insensibilité stupide, mais une inviolabilité par laquelle l'homme est tout à fait hors de l'atteinte des impressions corporelles. Un stoïcien disait&nbsp;: «&nbsp;Ô goutte, tourmente-moi tant que tu voudras&nbsp;; jamais tu ne me contraindras d'avouer que la douleur soit un mal&nbsp;». </p>

</dd>


<dt class="bleu">Sybarite<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Un sybarite désigne une personne s'adonnant au sybaritisme. <br />
Mais qu'est ce que le sybaritisme&nbsp;? Le sybaritisme est une doctrine philosophique prônant la recherche du plaisir, de la luxure et l'indiscipline. <small>Tout le portrait de Yannish ça&hellip; </small></p>

</dd>


<dt class="blanc">Sycophante<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Dans les cités grecques antiques, désignait un délateur professionnel qui dénoncait dans un but lucratif. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="t">t</a></h3>

<dl>
<dt class="bleu">Taciturne</dt>
<dd><p>Qui parle peu, qui n'est pas d'humeur à parler. </p>

</dd>


<dt class="blanc">Tartempion</dt>
<dd><p>Désigne une personne dont on ne révèle pas le vrai nom, par ignorance ou par intention humoristique. </p>

</dd>


<dt class="bleu">Tautologie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La tautologie (du grec tauto logos, le fait de redire la même chose) est une phrase ou un effet de style ainsi tourné que sa formulation ne peut être que vraie. La tautologie peut aussi s'apparenter au truisme ou à une lapalissade. En logique le mot tautologie désigne une proposition toujours vraie. On utilise aussi l'adjectif tautologique en mathématique pour désigner des structures qui émergent naturellement de la définition de certains objets. </p>

</dd>


<dt class="blanc">Taxinomie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>

<dd><p>Désigne un arbre hiérarchique de catégorisation thématique. Science des lois de la classification. </p>

</dd>


<dt class="bleu">Tehon</dt>
<dd><p>Verlan du mot &quot;Honte&quot;. Se dit d'une chose déshonorante. </p>

</dd>


<dt class="blanc">Thaumaturge<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Du Grec «&nbsp;celui qui fait des tours d'adresse&nbsp;» il devient, à l'époque chrétienne, «&nbsp;celui qui fait des miracles&nbsp;». <br />
Le thaumaturge est donc celui qui accomplit des miracles et des guérisons par le contact de ses mains. Il désigne aussi un magicien dans la littérature d'heroic fantasy. </p>

</dd>


<dt class="bleu">Thuriféraire<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Dans l'église catholique, personne chargée de l'encensoir. Par dérivation, désigne maintenant un vil flatteur. </p>

</dd>


<dt class="blanc">Toto<em><nolink>Catégorie : Néologisme Lachalien</nolink></em></dt>

<dd><p>Petit personnage anecdotique de l'école communale, trainant dans ses bagages des sacs de bille, des marshmallows et des connaissances mathématiques d'Insalien de premier cycle. Il introduit souvent un nouveau chapitre, ou une notion compliquée. </p>

</dd>


<dt class="bleu">Translittération</dt>
<dd><p>La translittération est l'écriture d'un mot ou d'un texte écrit avec un système, dans un autre système d'écriture. La translittération vise à être sans perte, de sorte qu'il devrait idéalement toujours être possible, en connaissant les règles de translittération, de reconstituer le texte original à partir de la translittération. Les deux systèmes d'écriture devraient donc être équipotents&nbsp;: une translittération ne peut être ambiguë et devrait être bijective. Pour atteindre cet objectif, les systèmes de translittération définissent souvent des conventions complexes pour traiter les graphèmes de l'écriture d'origine qui n'ont pas de correspondance évidente dans l'écriture d'arrivée. </p>

</dd>

<dt class="blanc">Tribulations</dt>
<dd><p>Aventures, mésaventures, épreuves. </p>

</dd>


<dt class="bleu">Triskaidékaphobe<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La triskaidékaphobie (du grec ancien &#964;&#961;&#949;&#953;&#963;&#954;&#945;&#943;&#948;&#949;&#954;&#945; treiskaídeka, «&nbsp;treize&nbsp;» et &#966;&#972;&#976;&#959;&#962; phóbos, «&nbsp;peur&nbsp;») est la phobie du nombre treize. Elle est souvent considérée comme une superstition. </p>

<p>Elle est reliée au fait qu'il y avait treize personnes autour de la table du dernier repas de Jésus Christ, mais son origine remonte plus probablement au Moyen Âge. </p>

<p>La triskaidékaphobie a peut-être également affecté les Vikings, le dieu Loki étant le treizième dieu de leur mythologie. Ce fut repris plus tard par les chrétiens, désignant Satan comme le treizième ange. </p>

<p>On rencontre au Japon une phobie similaire concernant le nombre 4, dont une des lectures (shi) est une homonymie de la mort. </p>

<p>Le mot triskaidékaphobie est une composition étymologiquement correcte mais assez arbitraire&nbsp;: dans les pays anglophones, le mot est plutôt employé comme virelangue que pour réellement désigner la phobie. </p>

</dd>


<dt class="blanc">Trivialité</dt>
<dd><p>Non important, à caractère banal. Désigne aussi quelque chose de vulgaire ou de grossier. </p>

</dd>


<dt class="bleu">Turpitude<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Ignominie qui résulte de quelque action honteuse. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="u">u</a></h3>
<dl>
<dt class="blanc">Ubiquité</dt>
<dd><p>L'ubiquité est la capacité d'être présent en plusieurs lieux simultanément. Le terme est dérivé du latin «&nbsp;ubique&nbsp;» qui signifie «&nbsp;partout&nbsp;». </p>

</dd>


<dt class="bleu">Ubuesque</dt>
<dd><p>D'un comique grotesque et démesuré, poussé jusqu'à l'absurde. L'adjectif vient du nom Ubu, du livre éponyme d'Alfred Jarry. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="v">v</a></h3>

<dl>
<dt class="blanc">Vacuité<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>État d'une chose vide. </p>

</dd>


<dt class="bleu">Vade mecum<em><nolink>Catégorie : Citation latine | Mot complexe</nolink></em></dt>
<dd><p>Du latin vade mecum («&nbsp;viens avec moi&nbsp;»), désigne un petit livre de voyage que l'on porte toujours sur soi pour se renseigner. </p>

</dd>


<dt class="blanc">Vae victis<em><nolink>Catégorie : Citation latine</nolink></em></dt>
<dd><p>«&nbsp;V&aelig; victis&nbsp;» est une expression latine signifiant malheur aux vaincus, et prononcée par le chef gaulois Brennus qui avait vaincu Rome. De nos jours, cette expression s'emploie pour rappeler que le vaincu est à la merci du vainqueur, surtout pendant les négociations qui suivent le combat. <br />
(Le lien joint à ce mot est particulièrement intéressant, et relate le contexte dans lequel cette locution fut crée. )</p>

</dd>


<dt class="bleu">Vaudou</dt>
<dd><p>Relatif au culte antillais qui mêle la sorcellerie, la magie et les rituels chrétiens. </p>

</dd>


<dt class="blanc">Verba volant scripta manent<em><nolink>Catégorie : Citation latine</nolink></em></dt>

<dd><p>«&nbsp;Les paroles s'envolent, les écrits restent&nbsp;»&nbsp;: on retient mieux ce qui est écrit. <br />
Les choses écrites restent fiables et fidèles. </p>

</dd>


<dt class="bleu">Vermiculure<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Dénommé aussi vermicule, se dit de motifs d'ornementation en forme de trace de vers, décrivant des courbes sinueuses, courtes et irrégulières gravées en creux dans la pierre. </p>

</dd>


<dt class="blanc">Versatile</dt>
<dd><p>Qui change facilement d'opinion. </p>

</dd>


<dt class="bleu">Verve<em><nolink>Catégorie : Rhétorique</nolink></em></dt>

<dd><p>Chaleur d’imagination qui anime l’orateur, le poète, l’artiste dans la composition de leurs ouvrages. </p>

</dd>


<dt class="blanc">Vésanie<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>La vésanie est un nom générique pour désigner toute forme d’aliénation, de folie. </p>

</dd>

<dt class="bleu">Viatique<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Le viatique (du latin viaticum «&nbsp;provisions de voyage&nbsp;») est, dans l'Église catholique romaine, l'eucharistie donnée à un mourant. </p>

<p>Autrefois, on utilisait le mot «&nbsp;extrême-onction&nbsp;» pour décrire la combinaison de l'onction des malades avec l'eucharistie. Mais après le concile Vatican II, la constitution apostolique «&nbsp;Sacram unctionem infirmorum&nbsp;» du 30&nbsp;novembre 1972&nbsp;a organisé le rite et dirigé l'abandon de ce terme. </p>

<p>Le viatique désigne donc un soutien, un atout, ou un moyen de parvenir à ses fins. </p>

</dd>


<dt class="blanc">Vilipender<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Traiter avec beaucoup de mépris, dénigrer. </p>

</dd>

<dt class="bleu">Vitupérer<em><nolink>Catégorie : Rhétorique</nolink></em></dt>
<dd><p>Protester, pester vivement contre quelque chose ou quelqu'un. </p>

</dd>


<dt class="blanc">Vocifération</dt>
<dd><p>Cri de colère poussé par quelqu'un ou par un groupe de personnes. </p>

</dd>


<dt class="bleu">Volapuk</dt>
<dd><p>Le volapuk est une langue construite par le prêtre catholique allemand Johann Martin Schleyer à partir d'un mélange de langues romanes. Elle se veut universelle et compréhensible par tous. </p>

</dd>


</dl>
<h3 class="Lettre"><a href="z">z</a></h3>

<dl>
<dt class="blanc">Zélateur<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Celui, celle qui témoigne d'une vive ardeur pour appliquer les consignes et les règlements à la lettre. </p>

</dd>


<dt class="bleu">Zoïle<em><nolink>Catégorie : Mot complexe</nolink></em></dt>
<dd><p>Zoïle est le nom d'un grammairien grec né à Amphipolis, ville de Thrace, au IVe s. av. J.-C. Il était célèbre dès l'Antiquité pour avoir critiqué l’Iliade et l’Odyssée d’Homère, mort sept cents ans plus tôt, dans un recueil de méchancetés intitulé <em>Zoïle, le fléau d’Homère [Homeromastix], a écrit ceci contre les adorateurs de ses fables</em>. Il était surnommé «&nbsp;le chien rhéteur&nbsp;» et son nom servait d'injure. Quelqu'un lui demanda un jour pourquoi il disait du mal des hommes. Il répondit&nbsp;: «&nbsp;C’est parce que je ne puis leur en faire.&nbsp;» Sa fin, d’après les anciens auteurs, fut tragique, mais on ne sait pas s'il fut précipité du haut d’un rocher, pendu, crucifié ou brûlé. En critiquant un grand auteur, Zoïle a tenté de se donner de l'importance, mais son calcul ne fut pas payant puisqu'on ne parle plus de lui qu'en mauvaise part. </p>

<p>Désigne maintenant un critique envieux, méchant et partial. </p>

</dd>


<dt class="blanc">Zut</dt>
<dd><p>Zut est une interjection marquant le mécontentement. </p>

</dd>


</dl>

<p class="Legal"></p>
</div>
</body>
</html>
TEST;

include('../header.php');

function Encode($Texte)
{

	$Texte=StripCarac($Texte);

	$Texte=str_replace(","," ",$Texte);
	$Texte=str_replace(" ","_",$Texte);
	$Texte=str_replace(".","-",$Texte);
	$Texte=strtoupper($Texte{0}) . strtolower(substr($Texte,1));
	return $Texte;
}
function StripCarac($Texte)
{	//Remplacer les caractères accentués.
$Acc=array('ô','ü','î','ï','é','è','ê','à',' ');
$Rep=array('o','u','i','i','e','e','e','a','_');
return str_ireplace($Acc,$Rep,strtolower($Texte));
}
//Faire la liste des mots
$mot=mysql_query('SELECT Mot,LEFT(Definition,20) AS ShortDefinition FROM Lachal_Citations ORDER BY Mot LIMIT 1') or die(mysql_error());
$Patterns=array();
$date = date('d/m/Y');
$nbMots=mysql_num_rows($mot);
$i=0;
while($current=mysql_fetch_array($mot))
{
	$Patterns['#(\W)(' . preg_quote($current['Mot']) . ')(\w*)(\W)#iU']='$1<a class="Ancre" href="' . Encode($current['Mot']) . '">$2$3</a>$4';
	$i++;
}

$compteur=0;
$buffer=str_split($buffer,90000);
$buffer= implode(preg_replace(array_keys($Patterns),array_values($Patterns),$buffer,-1,$compteur));
echo $buffer;