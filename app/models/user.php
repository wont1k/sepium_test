<?php
require_once __DIR__ . "/../../config/database.php";
class User {
    private $mysql;

    public function __construct($mysql) {
        $this->mysql = $mysql;
    }

    public function create($name, $password, $email) {
        $check_name = $this->mysql->query("SELECT * FROM `users` WHERE `name` = '$name' ");
        if ($check_name->num_rows > 0) {
            echo json_encode(['status'=> 'error', 'message' => 'Пользователь с таким именем уже существует']);
            die;
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $this->mysql->query("INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`, `privilege`) VALUES (NULL, '$name', '$hashed_password', '$email', CURRENT_TIMESTAMP, '0')");
        }
    }

    public function getAll() {
        $users = $this->mysql->query("SELECT id, name, email, created_at FROM `users`");
        if ($users->num_rows > 0) {
            $users = $users->fetch_all(MYSQLI_ASSOC);
        } 
        return $users;
    }

    public function delete($id) {
       $this->mysql->query("DELETE FROM `users` WHERE `id` = '$id' ");
    }
    public function login($name, $password) {
        $users = $this->mysql->query("SELECT * FROM `users` WHERE `name` = '$name'");
        $user = $users->fetch_assoc();
        // проверяем пароль
        if (password_verify($password, $user['password'])) {
            $_SESSION['logged_user'] = $user;
        }
        else {
            echo json_encode(['status'=> 'error', 'message' => 'Неверный пароль']);
                die;
            }
    }
    public function logout() {
        $_SESSION['logged_user'] = NULL;
    }
}
