<?php

namespace App\Controllers;

use App\Models\Family;
require_once __DIR__."/../models/Family.php";
require_once "BaseController.php";

use App\Database\Connection;

require_once __DIR__. "/../../config/connection.php";

class FamilyController extends BaseController
{
    Private $family;

    public function __construct()
    {
        $this->family= new Family();
    
    }

    public function index()
    {
        $families = $this->family->getAllFamilies();
        
        $this->render("family/index", compact("families"));
    }

    public function create()
    { 
       if($_SERVER["REQUEST_METHOD"]==="POST")
       {
            $f = new Family();
            $f->setFirstName($_POST["first_name"]);
            $f->setMiddleName($_POST["middle_name"]);
            $f->setLastName($_POST["last_name"]);
            $f->setMembers($_POST["members"]);
            $f->setPhone($_POST["phone"]);
            $f->setJobStatus($_POST["job_status"]);
            $f->setAddress($_POST["address"]);
            $f->save();
       }
       else
       {
        $this->render("family/create");
       } 
    }
    public function edit()
    {   
        $id =$_GET["id"];
        
        $f= $this->family->getFamilyById($id);
        $this->render("family/edit",compact("f"));
    }
    public function update()
    {

        if($_SERVER['REQUEST_METHOD']==='POST'){
        $id =$_POST["id"];
        
        $f= $this->family->getFamilyById($id);
        $f->setFirstName($_POST["first_name"]);
        $f->setMiddleName($_POST["middle_name"]);
        $f->setLastName($_POST["last_name"]);
        $f->setMembers($_POST["members"]);
        $f->setPhone($_POST["phone"]);
        $f->setJobStatus($_POST["job_status"]);
        $f->setAddress($_POST["address"]);
        $f->save();


    } 
}
    public function search()
    {
        $s =$_POST["search"];
        $family= new Family();
        
        $families= $family->getFamiliesByAddress($s);
        
        $this->render("family/index", compact("families"));
    }
    public function delete()
    {  $id=$_GET["id"];
        $family= new Family();
        
        $f= $family->getFamilyById($id);
        $f->delete();
        header("Location: test/index");
    }
}
