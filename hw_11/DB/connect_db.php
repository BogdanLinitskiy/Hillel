<?php

try{
$pdoDB = new PDO('mysql:host=localhost;dbname=publications','jokes_member','123');
$pdoDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDB->exec("SET NAMES 'utf8' ");
}catch (PDOException $e){
die('Нет соединения с БД'."<br>".$e->getMessage());
}
