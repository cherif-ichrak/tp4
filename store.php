<?php
<?php
include 'classes/etudiant.class.php';
$firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'] ;
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $nouveletudiant=new Etudiant;
 $nouveletudiant->createEtudiant($firstname,$lastname,$email,$phone);
header("location:index.php");
?>