
<?php

include "../controller/employeC.php";

$employeC=new EmployeC();
$employeC ->updateemploye($_GET["id"],$_GET["nom"],$_GET["prenom"],$_GET["phone"],$_GET["email"],$_GET["dob"],$_GET["password"]);

header('Location:ListEmployes.php');

?>