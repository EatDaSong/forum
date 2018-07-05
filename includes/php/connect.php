<?php

if(isset($_SESSION['login'])) {
    header('Location: index.php');
}   else    {
    if(isset($_POST['username'])){ //verif existance des variables
        if(isset($_POST['password'])){ //verif existance des variables
            $password = md5($_POST['password']);
            if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL)) {
                $reqTest = $bdd->query("SELECT * FROM user WHERE email = '".addslashes($_POST['username'])."' AND password = '".$password."'"); //requête pour tester l'utilisateur
                $req = $bdd->query("SELECT * FROM user WHERE email = '".addslashes($_POST['username'])."' AND password = '".$password."'"); //requète contenant les infos utilisateur
                if($resulttest = $reqTest->fetch()) {
                    $result = $req->fetch();
                    setSession($result['ID'], $result['pseudo'], $result['username'], $password, $result['email'], $result['signature'], $result['rang']); //Définition des session
                    confirmLogin($result['pseudo']);
                } else {
                    header('Location: ?page=inscription&erreurLogs=true');
                }
            }   else    {
                $reqTest = $bdd->query("SELECT * FROM user WHERE username = '".addslashes($_POST['username'])."' AND password = '".$password."'"); //requête pour tester l'utilisateur
                $req = $bdd->query("SELECT * FROM user WHERE username = '".addslashes($_POST['username'])."' AND password = '".$password."'"); //requète contenant les infos utilisateur
                $result = $req->fetch();
                if($resulttest = $reqTest->fetch()) {
                    setSession($result['ID'], $result['pseudo'], $result['username'], $password, $result['email'], $result['signature'], $result['rang']); //Définition des session
                    confirmLogin($result['pseudo']);
                } else {
                    header('Location: ?page=inscription&erreurLogs=true'); //erreur de connection, les IDs ne correspondent pas
                }
            }
            $req->closeCursor();
            $reqTest->closeCursor();
        }   else    {
            header('Location: ?page=inscription');
        }
    }   else    {
        header('Location: ?page=inscription');
    }
}
?>