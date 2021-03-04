<?php
//Check if credentials are valid
include "./lib/functions.php";
require "./Classes/DB.php";

if (issetPostParams('username', 'password')) {
    $bdd = DB::getInstance();

    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);

    $stmt = $bdd->prepare("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    $result = $stmt->execute();

    foreach ($stmt->fetchAll() as $user) {
        echo "Username = " . $user['username'] . ", password = " . $user['password'];
        session_start ();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        header("Location: bienvenue.php");
    }
}
echo '<body onLoad="alert(\'Membre non reconnu !\')">';
echo '<meta http-equiv="refresh" content="0;URL=login.php">';