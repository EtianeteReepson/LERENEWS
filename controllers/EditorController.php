<?php
session_start();
class EditorController extends RenderViews
{
    private $editor;
    private $news;
    private $session;
    public function __construct()
    {
        $this->editor = new EditorDAO();
        $this->news = new NewsDAO();
        $this->session = new SessionManeger();
        $this->session->verify();
    }


    public function cadastrar()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $this->editor->cadastrar($nome, $email, $senha);
    }
    public function show()
    {
    }
    public function edit()
    {
    }

    public function loginEd()
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $this->editor->loginEd($email, $senha);
    }

    public function addNewsEd()
    {
        $tittle = $_POST['tittle'];
        $news = $_POST['news'];
        $category = $_POST['category'];
        $this->editor->addNewsEd($tittle, $news, $category);
    }


    public function editNewsEd()
    {
        $this->session->verify();
        $id = $_GET["news"];
        $this->loadView("editarNewsEd", ['news' => $this->editor->getNewsById($id)]);
    }

    public function updateNewsEd()
    {
        $id = $_POST['id'];
        $tittle = $_POST['tittle'];
        $news = $_POST['news'];
        $category = $_POST['category'];
        $this->editor->updateNewsEd($id, $tittle, $news, $category);
    }
    public function deleteNewsEd()
    {
        $id = $_GET['news'];
        $this->editor->deleteNewsEdId($id);
    }

    public function listarEditor()
    {
        $this->loadView("listarEditor", ['editor' => $this->editor->listarEditor()]);
    }
}
