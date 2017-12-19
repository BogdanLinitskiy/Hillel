<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 01.12.2017
 * Time: 16:42
 */

class Article extends  Publications
{
    public $author;
    public function __construct($id,$title,$entry_text,$full_text,$publication_type,$author)
    {
        parent::__construct($id,$title,$entry_text,$full_text,$publication_type);
        $this->author=$author;
    }

    public function getShortPreview()
    {
        return parent::getShortPreview().'<br>' . '<h4>' . $this->author .'</h4>';
    }

}
