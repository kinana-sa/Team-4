<?php
// declare (strict_types=1);
namespace App\Models;

use App\Database\Connection;

require __DIR__. "/../../config/connection.php";
abstract class Model{

    protected  $conn ;
    protected  $id ;

    public function __construct()
    {
        $db = new Connection();
        $this->conn = $db->getConnection();
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    abstract public function save();{
        if($this->id){
            $result="UPDATE families SET first_name='$this->first_name' , middle_name='$this->middle_name', last_name='$this->last_name', members='$this->members', phone='$this->phone', job_status='$this->job_status', address_id='$this->address' WHERE id='$this->id'";
              $ss= mysqli_query($con,$result);
             }
             else{
               $s1="INSERT INTO families (first_name , middle_name , last_name , members , phone , job_status , address_id ) VALUES ('$this->first_name', '$this->middle_name') , '$this->last_name' , '$this->members', '$this->phone', '$this->job_status', '$this->address'";
             $result2=mysqli_query($con,$s1);
             $this->id=mysqli_insert_id($con);
             }
    }



    abstract public function delete();
}