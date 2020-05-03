<?php

//connexion bdd
require_once('class_database.php');
  $connexion = new Database('localhost', 'blog', 'root', '');
  $bdd = $connexion->PDOConnexion();

  

//connexion user
  require_once('User.php');

$email = !empty($_POST['email']) ? $_POST['email'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;

$user1 = new User($email, $pass);
$user1->connexion($bdd);



//inscription
require_once('class_signup.php');

$prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : NULL;
$mdp = !empty($_POST['mdp']) ? $_POST['mdp'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;

$user1= new signup ($prenom, $mdp, $mail);
$user1-> inscription($bdd);

?>
