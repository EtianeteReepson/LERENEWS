<?php
class EditorController
{
    private $editor;
    public function __construct()
    {
        $this->editor = new EditorDAO();
    }


    public function cadastrar()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $this->editor->cadastrar($nome, $email, $senha);
    }

    public function loginEd()
    {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $this->editor->loginEd($email, $senha);
    }
}
