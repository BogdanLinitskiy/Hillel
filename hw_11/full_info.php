<?php
	require_once 'DB/connect_db.php';
	require_once 'Classes/Postable.php';
	require_once 'Classes/Publications.php';

echo '<meta charset="UTF-8">';
//require_once 'index.php';
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_GET['id'])){
    $publication= Publications::create($_GET['id'],$pdoDB);
	echo $publication->getFullInfo();
}