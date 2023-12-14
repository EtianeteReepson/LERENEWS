<?php
session_start();
class NewsDAO
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function getNews()
    {
        $sql = $this->pdo->prepare("SELECT editor.nome as nome_editor, noticias.titulo as titulo, noticias.corpo as corpo, noticias.data as data, noticias.Categoria as Categoria from noticias INNER JOIN editor WHERE noticias.idEditor = editor.id");
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


    public function getMundo()
    {
        $sql = $this->pdo->prepare("SELECT editor.nome as nome_editor, noticias.titulo as titulo, noticias.corpo as corpo, noticias.data as data, noticias.Categoria as Categoria from noticias INNER JOIN editor WHERE noticias.idEditor = editor.id AND Categoria = 'Mundo'");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    public function getEconomia()
    {
        $sql = $this->pdo->prepare("SELECT editor.nome as nome_editor, noticias.titulo as titulo, noticias.corpo as corpo, noticias.data as data, noticias.Categoria as Categoria from noticias INNER JOIN editor WHERE noticias.idEditor = editor.id AND Categoria = 'Economia'");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    public function getDesporto()
    {
        $sql = $this->pdo->prepare("SELECT editor.nome as nome_editor, noticias.titulo as titulo, noticias.corpo as corpo, noticias.data as data, noticias.Categoria as Categoria from noticias INNER JOIN editor WHERE noticias.idEditor = editor.id AND Categoria = 'Desporto'");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
    public function getSaude()
    {
        $sql = $this->pdo->prepare("SELECT editor.nome as nome_editor, noticias.titulo as titulo, noticias.corpo as corpo, noticias.data as data, noticias.Categoria as Categoria from noticias INNER JOIN editor WHERE noticias.idEditor = editor.id AND Categoria = 'Saude'");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    public function getPolitica()
    {
        $sql = $this->pdo->prepare("SELECT editor.nome as nome_editor, noticias.titulo as titulo, noticias.corpo as corpo, noticias.data as data, noticias.Categoria as Categoria from noticias INNER JOIN editor WHERE noticias.idEditor = editor.id AND Categoria = 'Politica'");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }

    public function addNews($tittle, $news, $category)
    {
        var_dump($news, $tittle, $category);
        $sql = $this->pdo->prepare("INSERT INTO noticias(titulo, corpo, data, categoria) VALUES (:tittle, :corpo, NOW(), :categoria)");
        $sql->bindParam(':tittle', $tittle);
        $sql->bindParam(':corpo', $news);
        $sql->bindParam(':categoria', $category);
        $sql->execute();
        echo "<script> alert('Adicionado com sucesso');location.href='./visualizarNews'</script>";
    }

    public function deleteNewsId($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM noticias WHERE id = $id");
        $sql->execute();
        echo "<script> alert('Apagado com sucesso');location.href='./visualizarNews'</script>";
    }

    public function updateNews($id, $tittle, $news, $category)
    {
        $sql = $this->pdo->prepare("UPDATE noticias SET titulo = '$tittle', corpo = '$news', Categoria = '$category' WHERE id = $id");
        $sql->execute();
        echo "<script> alert('Editado com sucesso');location.href='./visualizarNews'</script>";
    }

    public function pesquisarNews($search)
    {
        $sql = $this->pdo->prepare("SELECT * FROM noticias WHERE titulo LIKE '$search%'");
        $sql->execute();
        $pesquisar = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisar;
    }
}
