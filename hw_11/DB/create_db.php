<?php

require_once "connect_db.php";

try{
	$sqlQuery =
		'CREATE TABLE publication(
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			title VARCHAR(255),
			entry_text VARCHAR(255),
			full_text VARCHAR(255),
			publication_type VARCHAR(255),
			author VARCHAR(255),
			source VARCHAR(255)
	) DEFAULT CHARACTER SET utf8 ENGINE=innoDB;
	';
	$pdoDB->exec($sqlQuery);
}
catch(PDOException $e){
	die('Не удалось создать таблицу publication!<br>'.$e->getMessage());

}
