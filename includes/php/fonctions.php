<?php

//Fonctions création/édition des session
function setSession($id_user,$pseudo,$username,$password,$email,$signature,$rang) {
    $_SESSION['login'] = true;
    $_SESSION['id_user'] = $id_user;
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['signature'] = $signature;
    $_SESSION['rang'] = $rang;
    $_SESSION['password'] = $password;
}

//Confirmation de connection et redirection
function confirmLogin($pseudo) {
    echo "<div class='msgNotifGreen'>Bonjour ".$pseudo.", tu vas être redirigé vers la page principal dans 3 secondes.</div>";
    header( "refresh:3;url=index.php" );
}
