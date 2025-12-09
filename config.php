<?php
$host = 'localhost';
$dbname = 'platforme_formations';
$username = 'root';
$password = '';

$mysqli = mysqli_connect($host, $username, $password, $dbname);

if(!$mysqli) {
    echo "connexion échoué";
} else {
}
?>