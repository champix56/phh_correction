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
        $ret=$this->query("SELECT `idp`, `titre`, `description`, `dimensions`, `poids`, `rating`, `ean`, `prix`, `idcat` FROM `produit` WHERE `idp`=$id");
        if($ret->num_rows==0)return NULL;
        $result=mysqli_fetch($ret);
        return $result;
    }
}
?>