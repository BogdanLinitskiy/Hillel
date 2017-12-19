<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 01.12.2017
 * Time: 16:44
 */

 class Publications implements Postable
 {
     public $title;
     public $entry_text;
     public $full_text;
     public $publication_type;
     public $id;

     public function __construct($id, $title, $entry_text, $full_text, $publication_type)
     {
         $this->id = $id;
         $this->title = $title;
         $this->entry_text = $entry_text;
         $this->full_text = $full_text;
         $this->publication_type = $publication_type;
     }

     static public function create($id, PDO $pdo)
     {
         $sql = "SELECT * FROM publication WHERE id=:id";
         $statement = $pdo->prepare($sql);
         $statement->bindValue('id', $id);
         $statement->execute();
         $publicationRaw = $statement->fetch();
         $publication = new Publications($publicationRaw[$id], $publicationRaw['title'], $publicationRaw['entry_text'],
             $publicationRaw['full_text'], $publicationRaw['publication_type']);
         return $publication;
     }

     public function getShortPreview()
     {
         return '<h2>'.$this->title . '</h2><br>' .'<p>' . $this->entry_text . '</p><br>' . '<h5>' .
             $this->publication_type . '</h5><br>' . '<a href="full_info.php?id=' . $this->id . '">full text</a>';
     }

     public function getFullInfo()
     {
         return '<h2>'.$this->title . '</h2><br>' .'<p>' . $this->full_text . '</p><br>' . '<a href="index.php"> go back</a>';
     }
 }
