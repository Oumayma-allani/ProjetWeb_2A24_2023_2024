<?php
include "../config.php";
class EmployeC
{
public function showEmploye($employe)
{
    echo' <table border=1 width="100%">
        <tr align="center" >
        <td> Last Name</td>
        <td> First Name</td>
        <td> phone </td>
        <td> email </td>
        <td> date of birth</td>
        </tr>
        <tr>
        
        <td>'.$employe->getLastname().'</td>
        <td>'.$employe->getFirstname().'</td>
        <td>'.$employe->getPhone().'</td>
        <td>'.$employe->getEmail().'</td>
        <td>'.$employe->getDOB().'</td>
        </tr>
        </table>';


}

public function deleteemploye ($id)
{
    $sql ="DELETE FROM employe WHERE id = :id"; 
    $pdo =config::getConnexion ();

    $query =$pdo ->prepare($sql);
    $query ->bindValue (':id',$id);

    try{
        $query ->execute();
        

    }catch (PDOException $e)
    {
        $e ->getMessage();
    }
}
public function updateemploye($id,$nom,$prenom,$phone,$email,$dob,$password)
{
$sql="UPDATE employe SET FirstName=:prenom, LastName=:nom, Password=:password, Phone=:phone, Email=:email, Date of birth=:dob WHERE id=:id";
$pdo =config::getConnexion ();
try{
    $query ->execute();
    

}catch (PDOException $e)
{
    $e ->getMessage();
}
}
public function listEmployes()
    {
        $sql = "SELECT * FROM employe";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
}
?>