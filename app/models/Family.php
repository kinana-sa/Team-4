<?php
// declare (strict_types=1);
namespace App\Models;

require_once "Model.php";

class Family extends Model{
     

    public static function getAllFamilies()
    {
        $sql = "SELECT * FROM families";
        $result = mysqli_query($this->conn, $sql);

        $families = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $family = new Family();
            $family->setFirstName($row["first_name"]);
            $family->setMiddleName($row["middle_name"]);
            $family->setLastName($row["last_name"]);
            $family->setMembers($row["members"]);
            $family->setPhone($row["phone"]);
            $family->setJobStatus($row["job_status"]);
            $family->setAddress($row["address"]);

            $families[] = $family;
        }
        return $families;
    }

    public static function getFamilyById($id)
    {
        $sql = "SELECT * FROM families WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);

        $row = mysqli_fetch_assoc($result);
    
        $family = new Family();
        $family->setFirstName($row["first_name"]);
        $family->setMiddleName($row["middle_name"]);
        $family->setLastName($row["last_name"]);
        $family->setMembers($row["members"]);
        $family->setPhone($row["phone"]);
        $family->setJobStatus($row["job_status"]);
        return $family;
    }


public function delete($id)
{
    $sql="DELETE FROM families WHERE id = '$id'";
    $result=mysqli_query($this->conn,$sql);
    
}
}