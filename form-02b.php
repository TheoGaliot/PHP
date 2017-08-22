<!-- stocker les données de l'utilisateur dans :
-la variable $url
-la variable $tags

affichez le contenu de ces variables dans la baslise body -->

<?php
$url='';
$tags = [];

if ($_POST){
  // var_dump ($_POST);
  if (isset($_POST['url'])){
  $url = $_POST['url'];
}
if (isset($_POST['tags'])){
  $tags = $_POST['tags'];
}
}

?> <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<div>url : <?php echo htmlentities($url)?></div>

<div>tags :</div>
<ul>

  <?php
  foreach ($tags as $key => $value){
    echo '<li>' . htmlentities ($value) . '</li>';

  } ?>

</ul>

</body>
</html>
