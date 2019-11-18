<?php 
    require 'dbconnexion.class.php';
    class etudiants
    {
        private $cnx;
        public function __construct()
        {
            $db = new BasesBonnes;
            $this->cnx=$db->connectdb();
        }
        public function readAllEtudiants()
        {
            try
            {
                $req = 'SELECT * FROM students';
                $result=$this->cnx->prepare($req);
                $result->execute();
                return $result;
            }
            catch(PDOExeption $e)
            {
                echo $e->getMessage();
            }
        }
        public function createEtudinat($id,$firstname,$lastname ,$email ,$phone)
        {
            try
             {
                $sql = "INSERT INTO students (id,firstname ,lastname ,email ,phone) VALUES (null, :clt_firstname , :clt_lastname , :clt_email , :clt_phone)";
                $result=$this->exeReq($sql);
                $sql->bindParam":clt_firstname",$firstname;
                $sql->bindParam":clt_lastname",$lastname;
                $sql->bindParam":clt_email",$email;
                $sql->bindParam":clt_phone",$phone;
                $result->execute();
                return $result;
             }catch (PDOException $ex){
                 echo $ex->getMessage();
             }
            
        }
        public function updateEtudinat($id,$firstname,$lastname ,$email ,$phone){
            try
            {
               $sql = "UPDATE students SET (id,firstname ,lastname ,email ,phone) VALUES (null, firstname =:clt_firstname , :clt_lastname , :clt_email , :clt_phone WHERE id=clt_eid)";
               $result=$this->exeReq($sql);
               $sql->bindParam":clt_firstname",$firstname;
               $sql->bindParam":clt_lastname",$lastname;
               $sql->bindParam":clt_email",$email;
               $sql->bindParam":clt_phone",$phone;
               $result->execute();
               return $result;
            }catch (PDOException $ex){
                echo $ex->getMessage();
            }
        }
        public function deleteEtudinat($id){
            try{
                $sql='DELETE FROM students WHERE id= :clt_id';
                $result= $this->cnx->prepare($sql);
                $result->bindparam(":clt_id",$id);
                $result->execute();
                return $result;

            }catch (PDOException $exception){
                echo  $exception->getMessage();
            }
        }

    }