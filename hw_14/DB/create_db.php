<?php
require_once "connect_db.php";
try{
    $sql = 'CREATE TABLE cart(
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255),
            description VARCHAR(255),
            cost INT NOT NULL,
            currency VARCHAR(255)
)';
    $pdo->exec($sql);
}catch (PDOException $e){
    die('Cannot create Data Base cart'.$e->getMessage());
}