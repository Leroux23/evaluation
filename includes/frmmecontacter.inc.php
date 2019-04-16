<?php
$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
$prenom = isset($_POST['prenom'])? $_POST['prenom'] : "";
$mail = isset($_POST['mail'])? $_POST['mail'] : "";



if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
if (!isset($mail)) $mail = "";
?>
<script>
    $.fancybox.open('<form action="index.php?page=frmmecontacter" method="post">' +
        '<div><label for="nom">Nom&nbsp;: </label><input type="text" id="nom" name="nom" value="<?= $nom ?>" /></div>' +
        '<div><label for="prenom">Prénom&nbsp;: </label><input type="text" id="prenom" name="prenom" value="<?= $prenom ?>" /></div>' +
        '<div><label for="mail">Adresse mail&nbsp;: </label><input type="text" id="mail" name="mail" value="<?=$mail?>" /></div>' +
        '<div><label for="text">Message&nbsp;: </label><textarea class="form-control" rows="7"></textarea></div>' +
        '<div><input type="reset" value="Effacer" /><input type="submit" value="Envoyer" /></div>' +
        '</form>"');
        if (window.confirm('Envoyer')) {
          window.alert('Votre message a bien été envoyé');
        }
</script>
