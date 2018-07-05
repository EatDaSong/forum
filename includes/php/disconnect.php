<?php
if(isset($_SESSION['login']))   {
    session_destroy();
    echo "<div class='msgNotifGreen'>Déconnection, redirection vers la page de login dans 3s</div>";
    header("refresh:3;url=index.php?page=inscription");
}   else    {
    header('Location: index.php');
}

?>