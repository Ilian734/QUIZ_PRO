<?php

$page = @$_GET['page'];

switch($page){
    
    case 'accueil':
        include('front/accueil.php');
        break;  

    case 'contact':
            include('front/contact.php');
        break;

 case 'qsn':
            include('front/qsn.php');
        break;

   case 'culture':
            include('./front/pages_themes/culture.php');
        break;


        case 'musique':
            include('./front/pages_themes/musique.php');
        break;


        case 'histoire':
            include('./front/pages_themes/histoire.php');
        break;


        case 'geo':
            include('./front/pages_themes/geo.php');
        break;
        case 'cinema':
            include('./front/pages_themes/cinema.php');
        break;
 case 'themes':
    include('front/themes.php');
break;

case 'moncompte':
    include('front/moncompte.php');
break;


case 'process':
    include('backend/process.php');
break;

case 'config':
    include('backend/config.php');
break;




    default:
        echo "page introuvable";
        break;
}
?>