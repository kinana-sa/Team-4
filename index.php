<?php

require_once "config/connection.php";
//require_once "app/controllers/UserController.php";
require_once "app/controllers/FamilyController.php";

//use App\Controllers\UserController;
use App\Controllers\FamilyController;
use App\Config\Connection;
//use App\Models\User;
$db = new Connection();
$conn = $db->getConnection();
//$userController = new UserController($conn);
$familyController = new FamilyController();

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
    
    default :
        $familyController->index();
        break;
}

    
  