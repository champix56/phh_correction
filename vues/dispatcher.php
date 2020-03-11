<?php 
//si un champs page est présent dans la querystring
if(isset($_GET['page'])){
    //en fonction du contenu du champs page de la queryString    
    switch($_GET['page']){
        case 'authentification':
            include('authentification/authentification.php');
            break;
        case 'produits':
            include('produits/produits.php');
            break;
        case 'produits':
            include('produits/produits.php');
            break;
        default:
            include('vues/404.php'); 
            break;
    }
}
//si pas de champs page chargement de l'accueil
else include('vues/home.php');
?>