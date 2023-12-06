<?php
class UsuarioController extends RenderViews
{
    private $usuario;
    public function __construct()
    {
        $this->usuario = new UserDAO();
    }
    public function index()
    {
        
    }
    public function show($id)
    {
        $idUser = $id[0];
        $this->loadView('A_listaUsuario', ['usuario' => $this->usuario->fetchById($idUser)]);
    }
    
    public function cadastrar()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //$admin = $_POST['admin'];
        
        $this->usuario->cadastrar($nome, $email, $senha);
    }

    public function UsuarioForm()
    {
        $this->loadView('cadastrar', []);
    }

    public function apagar($id)
    {
        $idUser = $id[0];
        $this->usuario->delete($idUser);
    }

    public function apagado(){
        $this->loadView('listaUsuario', []);
    }

    public function logout()
    {
        $this->usuario->logout();
    }

    public function signIn($email,$senha)
    {
        
            $email = $_POST['email']; 
            $senha = $_POST['senha'];         
            $this->usuario->signIn($email, $senha);
         
        }

    public function buscar()
    {
       // $this->loadView("listaUsuario", ['usuarios' => $this->Usuario->buscar()]);
    }

}