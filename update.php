<?php
require 'classes/etudiant.class.php';
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $id=$_POST['id'];
 $updateetudiant=new Etudiant;
 $updateetudiant->updateEtudiant($firstname,$lastname,$email,$phone);
 header("location:mgretudiant.php");