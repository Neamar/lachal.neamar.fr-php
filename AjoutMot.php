<div id="AjoutMot">
<form method="post" action="Post.php">
<!--!<p>Vous aussi, vous avez un mot à partager ?<br />N'hésitez pas à le rajouter...sans lever le doigt, vous n'êtes plus à l'école communale après tout !</p>-->
<table>
	<caption>Ajouter un nouveau mot !</caption>
	<tr>
		<td>Votre mot :</td><td><input type="text" value="" name="Mot" id="Mot" /></td>
		<td>Lien vers définition :</td><td><input type="text" value="http://" name="Lien" id="Lien" /></td>
	</tr>
	<tr>
		<td colspan="4">Une rapide définition de ce mot :<br /><textarea name="Definition" id="Definition" rows="5" cols="100"></textarea></td>
	</tr>
	<tr>
		<td colspan="2">Un ou plusieurs synonymes (séparés par une virgule ?)</td><td colspan="2"><input type="text" value="Synonyme" name="Synonyme" id="Synonyme" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<p>Un exemple d'utilisation ?<br /></p>
			<textarea name="Exemple1" id="Exemple1" rows="3" cols="40"></textarea>
			</td><td colspan="2">
			<p>Un autre exemple d'utilisation ?<br /></p>
			<textarea name="Exemple2" id="Exemple2" rows="3" cols="40"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="4"><input type="submit" value="Just Do It ! / Just write it ! / Just compute it !" /></td>
	</tr>
</table>
</form>
<p><a href="" onclick="javascript:document.getElementById('PourAjoutMot').innerHTML=''; return false" style="color:red; font-size:2em; text-align:center;">Fermer ce formulaire sans enregistrer les modifications.</a></p>
</div>