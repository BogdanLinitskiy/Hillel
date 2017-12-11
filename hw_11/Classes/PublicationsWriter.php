<?php


class PublicationsWriter
{
    public $publications;

    public function __construct($publicationType, PDO $pdoDB)
    {
        $sql = "SELECT * FROM publication WHERE publication_type ='" . $publicationType . "'";
        $result = $pdoDB->query($sql);
        $publications = $result->fetchAll();
        foreach ($publications as $publication) {
            if ($publicationType == 'article') {
                $this->publications[] = new Article($publication['id'], $publication['title'], $publication['entry_text'],
                    $publication['full_text'], $publication['publication_type'], $publication['author']);

            } elseif ($publicationType == 'news') {
                $this->publications[] = new News($publication['id'], $publication['title'], $publication['entry_text'],
                    $publication['full_text'], $publication['publication_type'], $publication['source']);

            }
            elseif($publicationType == 'note'){
                $this->publications[] = new Note($publication['id'], $publication['title'], $publication['entry_text'],
                    $publication['full_text'], $publication['publication_type']);
            }
        }
    }


}



