<?php

namespace App\Controllers;

use App\Models\Family;
require_once __DIR__."/../models/Family.php";
require_once "BaseController.php";

class FamilyController extends BaseController
{
    public function index()
    {
        $f = Family::getAllFamilies();
        $this->render("family/index", compact("f"));
    }

    public function create()
    {
       if($_SERVER["REQUEST_METHOD"]==="POST")
       {
            $fname = $_POST["fname"];
            $add = $_POST["address"];
            $f = new Family();
            $f->setFirstName($fname);
            $f->setMiddleName($fname);
            $f->setLastName($fname);
            $f->setMembers(5);
            $f->setPhone("09999");
            $f->setAddress($add);
            $f->setJobStatus("employeed");
            $f->save($this->conn);
       }
       else
       {
        $this->render("family/create");
       } 
    }
    public function edit()
    {
        $id =$_GET["id"];
        $f= Family::getFamilyById( $id);
        $this->render("family/edit",compact("f"));
    }
    public function update()
    {
        $id =$_GET["id"];
        $f= Family::getFamilyById($id);
        $f->setFirstName($_POST["name"]);
        $f->save($this->conn);
        header("Location: /task/");
    }
    public function search()
    {
        $s =$_POST["search"];
        $f= Family::getFamiliesByAddress($s);
        $this->render("family/index", compact("f"));
    }
    public function delete()
    {
        
    }
}
