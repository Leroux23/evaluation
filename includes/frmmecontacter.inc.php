<?php
$nom = isset($_POST['nom']) ? $_POST['nom'] : "";
$prenom = isset($_POST['prenom'])? $_POST['prenom'] : "";
$mail = isset($_POST['mail'])? $_POST['mail'] : "";
$message = isset($_POST['message'])? $_POST['message'] : "";

if (!isset($nom)) $nom = "";
if (!isset($prenom)) $prenom = "";
if (!isset($mail)) $mail = "";
if (!isset($message)) $message = "";

$errMsg = "";

$erreurs = array();
if ($nom == "")
  array_push($erreurs, "Veuillez saisir un nom");
if ($prenom == "")
  array_push($erreurs, "Veuillez saisir un prénom");
if ($mail == "")
    array_push($erreurs, "Veuillez saisir une adresse mail");
if ($message == "")
    array_push($erreurs, "Veuillez saisir un message");


if (count($erreurs) > 0) {
  $errMsg = "<ul>";
  for ($i = 0 ; $i < count($erreurs) ; $i++) {
    $errMsg .= "<li>" . $erreurs[$i] . "</li>";
  }

  $errMsg .= "</ul>";
}

else {
  $errMsg = "<p>Envoi OK</p>";
}

echo "<script>$.fancybox.open(' $errMsg ')</script>";
?>
<script>
$('.fancybox-content').on('click', function() {
  $.fancybox.open('<form action="index.php?page=frmmecontacter" method="post">' +
      '<div><label for="nom">Nom&nbsp;: </label><input type="text" id="nom" name="nom" value="<?= $nom ?>" /></div>' +
      '<div><label for="prenom">Prénom&nbsp;: </label><input type="text" id="prenom" name="prenom" value="<?= $prenom ?>" /></div>' +
      '<div><label for="mail">Adresse mail&nbsp;: </label><input type="text" id="mail" name="mail" value="<?=$mail?>" /></div>' +
      '<div><label for="text">Message&nbsp;: </label><textarea class="form-control" rows="7" value="<?=$message?>"></textarea></div>' +
      '<div><input type="hidden" name="formulaire" /><input type="reset" value="Effacer" /><input type="submit" value="Envoyer" /></div>' +
      '</form>"');
});
</script>
