<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$phone=$_POST['telephone'];
$email=$_POST['email'];
$dob=$_POST['ddn'];
$password=$_POST['password'];
include "../controller/employeC.php";
include "../Modele/employe.php";
$employe=new Employe($nom,$prenom,$password,$phone,$email,$dob);
$emplo=new EmployeC();
$emplo->showEmploye($employe);
?>