<?php include ('../include/connectbdd.php');

$id=$_GET['id'];

$req = $bdd->prepare("DELETE FROM users WHERE id_user = '$id'");
$req ->execute();
$req -> closecursor();

header("location:admin.php");
?> 