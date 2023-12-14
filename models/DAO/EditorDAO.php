<?php
session_start();
class EditorDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM editor");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
    public function cadastrar($nome, $email, $password)
    {
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $stm = $this->pdo->prepare("INSERT INTO editor(nome, email, password) VALUES(:nome, :email, :senha)");
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':senha', $hashpassword);
        $stm->execute();

        echo "<script> alert('Editor Cadastrado com sucesso! ');location.href='./cadastrarEditor'</script>";
    }

    public function loginEd($email, $senha)
    {
        $stm = $this->pdo->prepare("SELECT * FROM editor WHERE email = :email");
        $stm->bindParam(":email", $email);
        $stm->execute();

        $editor = $stm->fetch(PDO::FETCH_ASSOC);

        if ($editor && password_verify($senha, $editor['password'])) {
            $_SESSION['editor_id'] = $editor['id'];
            header("Location: ./telaEditor");
        } else {
            echo "<script> alert('Credencias erradas, por favor verifique! ');location.href='./loginEditor'</script>";
            return false;
        }
    }

    public function addNewsEd($tittle, $news, $category)
    {
        $id = $_SESSION['editor_id'];
        var_dump($news, $tittle, $category);
        $sql = $this->pdo->prepare("INSERT INTO noticias(titulo, corpo, data, categoria, idEditor) VALUES (:tittle, :corpo, NOW(), :categoria, :idEditor)");
        $sql->bindParam(':tittle', $tittle);
        $sql->bindParam(':corpo', $news);
        $sql->bindParam(':categoria', $category);
        $sql->bindParam(':idEditor', $id);
        $sql->execute();
        echo "<script> alert('Adicionado com sucesso');location.href='./telaEditor'</script>";
    }

    public function deleteNewsEdId($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM noticias WHERE id = $id");
        $sql->execute();
        echo "<script> alert('Apagado com sucesso');location.href='./telaEditor'</script>";
    }

    public function updateNewsEd($id, $tittle, $news, $category)
    {
        $sql = $this->pdo->prepare("UPDATE noticias SET titulo = '$tittle', corpo = '$news', Categoria = '$category' WHERE id = $id");
        $sql->execute();
        echo "<script> alert('Editado com sucesso');location.href='./telaEditor'</script>";
    }

    public function getNews()
    {
        $id = $_SESSION['editor_id'];
        $sql = $this->pdo->prepare("SELECT * FROM noticias WHERE idEditor = $id");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    public function getNewsById($id)
    {
        $sql = $this->pdo->prepare("SELECT * FROM noticias WHERE id = $id ");
        $sql->execute();
        $news = $sql->fetch(PDO::FETCH_ASSOC);
        return $news;
    }

    public function listarEditor()
    {
        $sql = $this->pdo->query("SELECT * FROM editor");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
