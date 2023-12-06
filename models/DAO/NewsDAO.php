<?php
class NewsDAO{
    private $pdo;
    public function __construct() {
        $this->pdo = Database::getConnection();
    }

    public function getNews(){
        $sql = $this->pdo->prepare("SELECT * FROM noticias");
        $sql->execute();
        $news = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $news;
    }
    
    
}