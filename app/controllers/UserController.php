<?php 
namespace App\controller;
require_once __DIR__.'/../models/User.php';
require_once 'BaseController.php';
use App\Models\User;
use App\Controllers\BaseController;

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
        