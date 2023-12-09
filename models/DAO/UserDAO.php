<?php
class UserDAO
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function fetch()
    {
        $stm = $this->pdo->query("SELECT * FROM usuario");
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return [];
        }
    }
    public function cadastrar($nome, $email, $senha)
    {
        $stm = $this->pdo->prepare("INSERT INTO usuario(nome, email, senha) VALUES(:nome, :email, :senha)");
        $stm->bindParam(':nome', $nome);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':senha', $senha);
        $stm->execute();

        header('Location: /LeReNews');
    }


    public function getUsuario()
    {
        $usuarioId = $_SESSION['usuario_id'];
        $stm = $this->pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $stm->bindParam(':id', $usuarioId);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function update(UsuarioDTO $usuario)
    {
        $usuariorioId = $_SESSION['usuario_id'];
        $stm = $this->pdo->prepare('UPDATE usuario SET nome = :nome, senha = :senha, email = :email WHERE id = :id');
        $stm->bindParam(':nome', $usuario->nome);
        $stm->bindParam(':email', $usuario->email);
        $stm->bindParam(':senha', $usuario->senha);
        $stm->bindParam(':id', $usuario->id);

        $stm->execute();
    }



    public function fetchById($id)
    {
        $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE id = ?");
        $stm->execute([$id]);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }


    public function logout()
    {
        session_destroy();
        header("Location: /LeReNews");
    }

    public function delete($id)
    {
        $stm = $this->pdo->prepare('DELETE FROM usuario WHERE id = ?');
        $stm->execute([$id]);
        header('Location: /LeReNews');
    }


    public function signIn($email, $senha)
    {
        $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email");
        $stm->bindParam(":email", $email);
        $stm->execute();

        $usuario = $stm->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['user_id'] = $usuario['id'];
            header("Location: /LeReNews/homepage");
        } else {
            return false;
        }
    }

    public function getByEmail($email)
    {
        $stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE :email = ?");
        $stm->bindParam(':email', $email);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}
