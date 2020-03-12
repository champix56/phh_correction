<?php
    function d_vardump($variable){
        global $_DEBUG;
        if(isset($_DEBUG) && $_DEBUG==true)var_dump($variable);
    }
    include_once('mysql.php');
    //je creer l'objet sql pour ma page 
    $db=new BaseDeDonnees();
    d_vardump($db);
?>