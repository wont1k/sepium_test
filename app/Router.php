<?php
require_once __DIR__ . "/models/user.php";
require_once __DIR__ . "/controllers/UserController.php";
require_once __DIR__ . "/../config/database.php";
class Router {
    private $mysql; 
    
    public function __construct($mysql) {
        $this->mysql = $mysql;
    }

    public function route() {
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

        switch ($url) {
            case '/':
                require_once 'controllers/UserController.php';
                $controller = new UserController($this->mysql);
                $controller->getUsers();
                break;
            case "/add":
                require_once 'controllers/UserController.php';
                $controller = new UserController($this->mysql);
                $controller->createUser();
                break;
            case '/delete':
                require_once 'controllers/UserController.php';
                $controller = new UserController($this->mysql);
                $controller->deleteUser();
                break;
            case '/login':
                require_once 'controllers/UserController.php';
                $controller = new UserController($this->mysql);
                $controller->loginUser();
                break;
            case '/logout':
                require_once 'controllers/UserController.php';
                $controller = new UserController($this->mysql);
                $controller->logoutUser();
                break;
            default:
                echo '404 Not Found';
                break;
        }
    }
}