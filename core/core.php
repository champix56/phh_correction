<?php
    function d_vardump($variable){
        global $_DEBUG;
        if(isset($_DEBUG) && $_DEBUG==true)var_dump($variable);
    }
    function disconnect(){
        session_destroy();
    }
    function checkAuthent(){
        if(isset($_GET["deconnexion"])){
            disconnect();
          //  header('Location:index.php?page=authentification');
        }
        else if(isset($_POST["login"]))
        {
            global $db;//usage de la variable global db innexistante dans ma fonction
            $valid=$db->authent($_POST["login"],$_POST["password"]);
            //echo $valid? 'user OK': 'pb user';
            if($valid)
            {
                $_SESSION['uid']=$_POST["login"];
                header("Location:index.php");
            }
        }
    }
    function addPanier($idp){
        if(!isset($_GET['addCart'])){
            $db->addPanier($idp);
        }
        $location='?';
        $i=0;
        foreach ($_GET as $key => $value) {
            if($i==0)$location.='?';
            else $location.='&';
            $location.=$key.'='.$value;
            $i++;
        }
        header('Location:$location');
    }
    include_once('mysql.php');
    //je creer l'objet sql pour ma page 
    $db=new BaseDeDonnees();  // var_dump($db);
    checkAuthent();


 
?>