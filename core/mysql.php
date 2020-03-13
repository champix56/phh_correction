<?php 
class BaseDeDonnees{
    private $ADR_MYSQL;
    private $USR_MYSQL;
    private $PSW_MYSQL;
    private $DB_MYSQL;
    private $linkDB=NULL;
    
    function __construct($adr='127.0.0.1',$user='root',$pswd='',$db='boutique')
    {
        $this->ADR_MYSQL=$adr;
        $this->USR_MYSQL=$user;
        $this->PSW_MYSQL=$pswd;
        $this->DB_MYSQL=$db;
        $this->connectDB();
    }
    private function connectDB(){
        if($this->linkDB==NULL)
        {
            $this->linkDB=mysqli_connect($this->ADR_MYSQL,$this->USR_MYSQL,$this->PSW_MYSQL,$this->DB_MYSQL);
        }
    }
    private function query($requete){
        //print_r($requete);
        $this->connectDB();
        return mysqli_query($this->linkDB,$requete);
    }
    public function authent($login,$mdp){ 
        $ret=$this->query("SELECT count(`idcl`)AS isvaliduser FROM `client` WHERE `login`='$login' AND `password`='$mdp';");
        //d_vardump($ret);
        $result=mysqli_fetch_array($ret);
        return ($result[0]==1) ? true : false;
    }
    public function getProduit($id)
    {
        $ret=$this->query("SELECT `idp`, `titre`, `description`, `dimensions`, `poids`, `rating`, `ean`, `prix`, `idcat`, `imgurl` FROM `produit` WHERE `idp`=$id");
        if($ret->num_rows==0)return NULL;
        $result=mysqli_fetch_array($ret);
        return $result;
    }
    public function getProduits($titre='')
    {
        $ret=$this->query("SELECT `idp`, `titre`, `description`, `rating`, `prix`, `imgurl`, `idcat` FROM `produit` WHERE titre LIKE '%$titre%'");
        if($ret->num_rows==0)return NULL;
        $arr=array();
        while($uneligne=mysqli_fetch_array($ret))
        {
            array_push($arr,$uneligne);
        }
        return $arr;
    }
    
    public function addPanier($idp){
        if(!isset($_SESSION["uid"]))return false;
        $this->query("INSERT INTO `ajouter_panier`(`idp`,`idcl`,`prix`) VALUES ($idp, (SELECT idcl FROM user WHERE login='".$_SESSION["uid"]."'),  (SELECT prix FROM produit WHERE ipd=$idp));");
    }
    public function getPanier(){
        if(!isset($_SESSION["uid"]))return false;
        $ret=$this->query("SELECT `idcl`, PR.`idp` AS idp, PA.`prix` AS prix FROM `ajouter_panier` PA ,`produit` PR WHERE PA.idp=PR.idp AND idcl=(SELECT idcl FROM client WHERE login='".$_SESSION["uid"]."');");
        $arr=array();
        while($uneligne=mysqli_fetch_array($ret))
        {
            array_push($arr,array($uneligne["titre"],$uneligne["prix"]));
        }
        return $arr;
    }
    public function updateImageProduct($imgPath,$idp){
            $this->query("UPDATE `produit` SET `imgurl`='$imgPath' WHERE idp=$idp");
    }
}
?>