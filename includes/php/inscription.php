<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_SESSION['login'])) {
    header('Location: index.php');
}   else    {
    if(isset($_POST['inscription'])) { //Si la variable POST inscription éxiste, on vérifie les données puis on valide l'inscription. 
        include('valid_inscription.php');
    } else { //Si la variable POST inscription n'éxiste pas on affiche le formulaire d'inscription.
        include('form_inscription.php');
    }
}
    
?>