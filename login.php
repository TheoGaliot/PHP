<!-- créez un formulaire de login :
- champ login
- champ password

récupérer ces données coté php puis :
-afficher les données de l'utilisateur dans les champs correspondants
- vérifier que :
-le login correspond à "toto"
-le password correspond à "123"
-affichez un message d'erreur si le login ou le mot de passe est faux
-affichez un message de bienvenue si le login et le mot de passe sont corrects -->
<?php
$username = 'toto';
$password = '123';
$message = '';

if ($_POST) {
  // var_dump($_POST);
}

if(isset($_POST['username'])) {
  $username = $_POST['username'];
}

if(isset($_POST['password'])) {
  $password = $_POST['password'];
}

if ($username == 'toto' && $password == '123'){
  $message = 'Vous êtes à présent connecté à notre site';

} else {
  $message ='Votre login ou votre mot de passe est érroné';
}

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/login.css">
  <title>Login.php</title>
</head>
<body>

 <div><?= htmlentities($message) ?></div> <!--afficher le texte de la variable message -->

  <div class="content">

    <div class="form-wrapper">

      <div class="linker">

        <span class="ring"></span>
        <span class="ring"></span>
        <span class="ring"></span>
        <span class="ring"></span>
        <span class="ring"></span>
      </div>

      <form class="login-form" action="#" method="post">
        <input type="text" name="username" value="<?php echo htmlentities($username);?>" placeholder="Entrez votre login" />
        <input type="password" name="password" value="<?php echo htmlentities($password);?>" placeholder="Entrez votre mot de passe" />
        <button type="submit" value="Envoyer">Se connecter</button>
      </form>
    </div>
  </div>

</body>
</html>
