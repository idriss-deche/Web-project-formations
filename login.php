<?php
include 'config.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "SELECT * FROM UTILISATEUR WHERE email = '$email'");

    if(mysqli_num_rows($result) == 0){
        echo "email not found";
    } else {
        $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row['mot_de_passe'])){
        echo "<h1>hello<h1/>"; } else {
            echo "wrong mot de passe"; }
        }


}
?>