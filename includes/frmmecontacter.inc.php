<script>
//  $.fancybox.open('Test');
//$.fancybox.open('<form method="post" action="index.php?page=frmmecontacter"><div><label for="nom">Nom&nbsp;: </label><input type="text" id="nom" name="nom" value="<?=$nom?>" /></div><div><label for="prenom">Prénom&nbsp;: </label><input type="text" id="prenom" name="prenom" value="<?=$prenom?>" /></div><div><label for="mail">Adresse email&nbsp;: </label><input type="text" id="mail" name="mail" value="<?=$mail?>" /></div><div><label for="text">Message&nbsp;: </label><textarea class="form-control" rows="7"></textarea></div><div><input type="reset" value="Effacer" /><input type="submit" value="Envoyer" /></div></form>')
</script>
<div id="formulaire">
</div>
<?php
if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
if (!isset($mail)) $mail = "";
