<?php
require_once __DIR__ . "/../../config/database.php";
require_once __DIR__ . '/../models/user.php';

class UserController {
    private $usermodel;

    public function __construct($mysql) {
        $this->usermodel = new User($mysql);
    }

    public function createUser() {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->usermodel->create($name, $password, $email);
            echo json_encode(["status" => "success"]);
            die;
    }

    public function getUsers() {
        $users = $this->usermodel->getAll();
        require __DIR__ . '/../view/index.php';
    }

    public function deleteUser() {
        $id = (int)$_POST['id'];
        $this->usermodel->delete($id);
        echo json_encode(['status'=> 'success']);
        die;
    }

    public function loginUser() {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $this->usermodel->login($name, $password);
        echo json_encode(['status'=> 'success']);
        die;
    }

    public function logoutUser() {
        $this->usermodel->logout();
        echo json_encode(['status'=> 'success']);
        die;
    }
}