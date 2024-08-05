<?php 
session_start();


try {
    $mysql = new mysqli("localhost","root", "", "test_app");
    $mysql->query("SET NAMES 'utf8'");

} catch (mysqli_sql_exception $e) {
     die("Не удалось подклюиться к базе данных: ". $e->getMessage());
}
