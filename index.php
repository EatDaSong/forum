<?php

session_start();
include('includes/php/fonctions.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include('includes/php/config.php');
include('includes/php/openDB.php');

?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="forum Simplon" /> <!-- déscription site web -->
        <meta name="keywords" content="forum, simplon, forum simplon, tutoriel, développement web, php, html, css" /> <!--mots clef déscriptifs-->
        <meta name="author" content="Back : stéphane lavigne, front : Felix mengin, chef de projet : greg lyntz" /> <!-- Auteurs du projet -->
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="includes/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="includes/css/inscription-style.css" />
        <link rel="stylesheet" type="text/css" href="includes/css/inscription-animate-custom.css" />
        <script src="includes/js/profil.js"></script>
        <title>Forum</title>
    </head>
    <header>

    </header>
    <body>
        <?php
        if(isset($_GET['page'])) {
            switch ($_GET['page']):
                default:
                    includes('includes/php/index.php');
                    break;
                case 'inscription':
                    include('includes/php/inscription.php');
                    break;
                case 'mp':
                    include('includes/php/mp.php');
                    break;
                case 'login' :
                    include('includes/php/login.php');
                    break;
                case 'admin' :
                    include('includes/php/admin.php');
                    break;
                case 'topic' : 
                    include('includes/php/topic.php');
                    break;
                case 'post' : 
                    include('includes/php/post.php');
                    break;
                case 'newsletter':
                    include('includes/php/newsletter.php');
                    break;
                case 'profil':
                    include('includes/php/profil.php');
                    break;
                case 'disconnect':
                    include('includes/php/disconnect.php');
                    break;
                case 'connect':
                    include('includes/php/connect.php');
                    break;
                case '404':
                    include('includes/html/404.html');
                    break;
                case 'conversation':
                    include('includes/php/conversation.php');
                    break;
            endswitch;
        }   else    {
            include('includes/php/index.php');
        }
        ?>
    </body>
</html>

<?php

include('includes/php/closeDB.php');

?>