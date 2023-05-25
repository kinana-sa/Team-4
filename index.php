<?php

require_once "app/controllers/UserController.php";
require_once "app/controllers/FamilyController.php";

use App\Controllers\FamilyController;
use App\Controllers\UserController;
use App\Config\Connection;
//use App\Models\User;
$familyController = new FamilyController();

$userController = new UserController();


define('BASE_PATH',"/task/");
$URL = $_GET['url'] ??"index";

session_start();


switch($URL)
{
    case "index":
        $familyController->index();
        break;
    case "create":
        $familyController->create();
        break;
    case "edit":
        $familyController->edit();
        break;
    case "update":
        $familyController->update();
        break;
    case "delete":
        $familyController->delete();
        break;
    case "search":
            $familyController->search();
            break;
    case "login":
        $userController->login();
        break;
    case "register":
         $userController->register();
        break;
    // case "search":
    //     $familyController->search();
    //     break;
    
    default :
        $familyController->index();
        break;
}

    
  