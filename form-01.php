<?php
$title = '';
$body = '';
if($_POST) {
 // var_dump($_GET); // permet de récupérer le contenu d'une variable ( et non pas l'afficher)
  if (isset($_POST['title'])){
  $title = $_POST['title'];
}
if (isset($_POST['body'])){
  $body = $_POST['body'];
}
}
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>

  <form action="" method="post">

    <input type="text" name="title" value="<?php echo htmlentities($title);?>" placeholder="titre"/><br/>

    <textarea name="body" placeholder="Insérer votre texte ici"><?php echo htmlentities($body);?></textarea><br/>

    <input type="submit" value="Envoyer"/>

  </form>

</body>
</html>
