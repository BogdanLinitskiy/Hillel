<?php
/**
 * Created by PhpStorm.
 * User: Да
 * Date: 01.12.2017
 * Time: 16:42
 */

class News extends  Publications
{
    public $source;
    public function __construct($id,$title,$entry_text,$full_text,$publication_type,$source)
    {
        parent::__construct($id,$title,$entry_text,$full_text,$publication_type);
        $this->source=$source;
    }
    public function getShortPreview()
    {
        return parent::getShortPreview().'<br>' . '<h4>' . $this->source . '</h4>';
    }

}