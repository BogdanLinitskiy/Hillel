<?php

class Note extends Publications
{
    public function __construct($id,$title,$entry_text,$full_text,$publication_type)
    {
        parent::__construct($id,$title,$entry_text,$full_text,$publication_type);
    }

    public function getShortPreview()
    {
        return parent::getShortPreview();
    }

}