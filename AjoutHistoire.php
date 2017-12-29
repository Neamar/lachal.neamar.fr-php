<?php
header("Content-Type:text/plain; charset=iso-8859-1");
?>
<div id="AjoutMot">
<form method='post' action="Exp.php">
<table>
	<caption>Ajouter une nouvelle expression !</caption>
	<tr>
		<td>L'expression incriminée :</td><td><textarea name="Expr" id="Expr" rows="5" cols="40"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Envoyer l'expression" /></td>
	</tr>
</table>
</form>
<p><a href="" onclick="javascript:document.getElementById('PourAjoutMot').innerHTML=''; return false" style="color:red; font-size:2em; text-align:center;">Fermer ce formulaire sans enregistrer les modifications.</a></p>
</div>