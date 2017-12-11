<?php

require_once 'DB/connect_db.php';
require_once 'Classes/Postable.php';
require_once 'Classes/Publications.php';
require_once 'Classes/Article.php';
require_once 'Classes/News.php';
require_once 'Classes/PublicationsWriter.php';

echo '<meta charset="UTF-8">';
try{
    $sql = "SELECT * FROM publication";
    $result = $pdoDB->query($sql);
    $resultArray = $result->fetchAll();
} catch(PDOException $e){
    die("Error while extracting publications".$e->getMessage());
}


$articles =  new PublicationsWriter('article', $pdoDB);
$news =  new PublicationsWriter('news', $pdoDB);
$note = new PublicationsWriter('note',$pdoDB);
foreach ($articles->publications as $publication){
	echo $publication->getShortPreview().'<br>';
}
foreach ($news->publications as $publication){
    echo $publication->getShortPreview().'<br>';
}
foreach ($note->publications as $publication){
    echo $publication->getShortPreview().'<br>';
}
?>

