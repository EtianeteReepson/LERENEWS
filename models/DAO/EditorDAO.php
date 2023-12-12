<?php
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
}
