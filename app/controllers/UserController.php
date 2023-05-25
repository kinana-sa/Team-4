<?php 

namespace App\Controllers;

use App\Models\User;
require_once __DIR__."/../models/User.php";
require_once "BaseController.php";

use App\Database\Connection;

require_once __DIR__. "/../../config/connection.php";

class UserController extends BaseController{
    
    public function index(){
       $users= User::getAllUsers();
       $this->render("user/index",compact($users));

    }
    public function delete()
    {  $id=$_POST['id'];
        $user= new User();
        $user->delete();

      }
    }
        