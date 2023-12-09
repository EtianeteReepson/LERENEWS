<?php

class NewsDTO{
    public $id;
    public $title;
    public $body;
    public $date;
    public $category;

    public function __construct($id, $title, $body, $date, $category){
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->date= $date;
        $this->category = $category;
        
    }

}