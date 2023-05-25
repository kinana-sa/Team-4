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
        $f= Family::getFamilyById( $id);
        $this->render("family/edit",compact("f"));
    }
    public function update()
    {

        if($_SERVER['REQUEST_METHOD']==='POST'){
        $id =$_GET["id"];
        $f= Family::getFamilyById($id);
        $f->setFirstName($_POST["first_name"]);
        $f->setMiddleName($_POST["middle_name"]);
        $f->setLastName($_POST["last_name"]);
        $f->setMembers($_POST["members"]);
        $f->setPhone($_POST["phone"]);
        $f->setJobStatus($_POST["job_status"]);
        $f->setAddress($_POST["address"]);
        $f->save();


    } 
    public function search()
    {
        $s =$_POST["search"];
        $f= Family::getFamiliesByAddress($s);
        $this->render("family/index", compact("f"));
    }
    public function delete()
    {  $id=$_GET["id"];
        $f=new Family();
        $f->delete($id);
    }
}
