<?php 
class BaseDeDonnees{
    private $ADR_MYSQL='127.0.0.1';
    private $USR_MYSQL='root';
    private $PSW_MYSQL='';
    private $DB_MYSQL='boutique';
    private $linkDB=NULL;
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
}
?>