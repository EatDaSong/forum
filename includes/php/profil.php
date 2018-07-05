<?php

if(isset($_SESSION['login'])) {
    if(isset($_GET['profil'])) {
        switch ($_GET['profil']):
            default:
                include('profil/profil.php');
                break;
            case 'editProfil':
                include('profil/editProfil.php');
                break;
            case 'password':
                include('profil/password.php');
                break;
            case 'editPassword':
                include('profil/editPassword.php');
                break;
        endswitch;
    }   else    {
        include('profil/profil.php');
    }
}   else    {   
    header("Location: index.php?page=404");
}

?>