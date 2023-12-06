<?php

class NewsDTO{
    public $id;
    public $title;
    public $body;
    public $date;

    public function __construct($id, $title, $body, $date){
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->date= $date;
    }

}