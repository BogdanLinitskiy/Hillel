<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=cart','jokes_member','123');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET NAMES 'utf8' ");
}catch (PDOException $e){
    die('Нет соединения с БД'."<br>".$e->getMessage());
}