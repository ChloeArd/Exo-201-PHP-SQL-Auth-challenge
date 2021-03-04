<?php

//mdp de Chloé Ard
$password_en_clair = "Manger0000!";


// Affichage du mot de passe crypté.
$encrypted = password_hash($password_en_clair, PASSWORD_BCRYPT);
echo $encrypted;

// Exemple de vérification d'un mot de passe.
if(password_verify($password_en_clair, $encrypted)) {
    // Les mots de passe correspondent, on peut par exemple enregistrer toutes les informations de l'utilisateur en session.
    echo "<br>Les mots de passes correspondent<br>";
}

//mdp de Peter Parker
$password_en_clair = "spiderMan123";

// Affichage du mot de passe crypté.
$encrypted = password_hash($password_en_clair, PASSWORD_BCRYPT);
echo $encrypted;
echo "<br>";

//mdp de Realken7
$password_en_clair = "youtube456?";

// Affichage du mot de passe crypté.
$encrypted = password_hash($password_en_clair, PASSWORD_BCRYPT);
echo $encrypted;

echo "<br>";

//mdp de Winnie
$password_en_clair = "miel7539";

// Affichage du mot de passe crypté.
$encrypted = password_hash($password_en_clair, PASSWORD_BCRYPT);
echo $encrypted;