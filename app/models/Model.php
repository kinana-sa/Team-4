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

    abstract public function save();
    abstract public function delete();
}