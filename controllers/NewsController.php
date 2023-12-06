<?php

class NewsController extends RenderViews{

    private $news;

    public function __construct(){
        $this->news = new NewsDAO();
    }
    public function index(){

    }


    public function create(){ 
        $title = $_POST['titulo'];
        $body= $_POST['corpo'];
        $date = $_POST['data'];
        $this->news->create($title, $body, $date);
    }

    public function buscar(){
        $this->loadView("listarNews", ['news' =>$this->news->buscar()]);
    }

    public function show(){
        
    }
    public function edit($id){}

    public function update(){
        $newsDTO = new NewsDTO();
        $this->news->update($newsDTO);

    }

}