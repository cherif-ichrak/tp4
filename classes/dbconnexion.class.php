<?php
    class BasesBonnes
    {
        private $host='localhost' ;
        private $dbname='students';
        private $user='root';
        private $pwd='';
   
      public function connectdb()
    {
        try{
            $this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);
        }catch(PDOExeption $e){
            echo $e->getMessage();
        }
        return $this->connexion ;
    }
   
}