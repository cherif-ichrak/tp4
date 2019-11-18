<?php
require 'classes/etudiant.class.php';
$suppetudiant=new Etudiant;
 $suppetudiant->deleteEtudiant();
header('location:index.php');