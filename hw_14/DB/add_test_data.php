<?php
require_once "connect_db.php";

try{
    $sql = 'INSERT INTO cart(name,description,cost,currency) VALUES ("coat","very good coat","2500","uah")';
    $pdo->exec($sql);
    $sql = 'INSERT INTO cart(name,description,cost,currency) VALUES ("jeans","very good jeans","50","usd")';
    $pdo->exec($sql);
    $sql = 'INSERT INTO cart(name,description,cost,currency) VALUES ("sneakers","very good sneakers","100","eur")';
    $pdo->exec($sql);
}catch (PDOException $e){
    die('cannot add test data into Data Base cart'.$e->getMessage());
}