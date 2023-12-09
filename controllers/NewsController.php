<?php

class NewsController extends RenderViews
{

    private $news;

    public function __construct()
    {
        $this->news = new NewsDAO();
    }
    public function index()
    {
    }


    public function addNews()
    {
        $tittle = $_POST['tittle'];
        $news = $_POST['news'];
        $category = $_POST['category'];
        $this->news->addNews($tittle, $news, $category);
    }

    

    public function show(){
    }
    public function edit()
    {
    }
    public function editNews()
    {
        $id = $_GET["news"];
        $this->loadView("editarNews", ['news' => $this->news->getNewsById($id)]);
    }

    public function updateNews()
    {
        $id = $_POST['id'];
        $tittle = $_POST['tittle'];
        $news = $_POST['news'];
        $category = $_POST['category'];
        $this->news->updateNews($id, $tittle, $news, $category);
    }
    public function deleteNews()
    {
        $id = $_GET['news'];
        $this->news->deleteNewsId($id);
    }
   
    
}
