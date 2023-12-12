<?php

class UsuarioDTO{
    public $id;
    public $nome;
    public $email;
    public $password;

    public function __construct($id, $nome, $email, $password, ){
         
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->password = $password;
    } 
    


}
