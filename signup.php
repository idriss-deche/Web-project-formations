<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'config.php';

if(isset($_POST['submit'])) {

$name = $_POST['name'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];

$hash_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO UTILISATEUR (email, mot_de_passe, nom, prenom , telephone) VALUES ('$email', '$hash_password', '$name', '$prenom', '$telephone')";

if(mysqli_query($mysqli, $sql)) {
    header("location: gologin.html");
} else {
    echo 'error' . mysqli_error($mysqli);
}}
?>