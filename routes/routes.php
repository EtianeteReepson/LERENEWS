<?php

$routes = [
    '/' => 'HomeController@index',
    '/usario/{id}' => 'UsuarioController@show',
    '/sign' => 'HomeController@sign',
    '/desporto' => 'HomeCOntroller@desporto',
    '/economia' => 'HomeCOntroller@economia',
    '/mundo' => 'HomeCOntroller@mundo',
    '/politica' => 'HomeCOntroller@politica',
    '/saude' => 'HomeCOntroller@saude',
    '/contact'=> 'HomeCOntroller@contact',
    '/cadastro'=> 'UsuarioController@cadastrar',
    '/singIn'=> 'UsuarioController@signIn',
    '/cadastrar'=> 'HomeController@cadastrar',
    '/apagar{id}'=> 'UsuarioController@apagar',
    '/apagado'=> 'UsuarioController@apagado',
    '/usario' => 'UsuarioController@show',
    '/logout'=> 'UsuarioController@logout',
    '/test'=> 'UsuarioController@UsuarioForm',
    '/adicionarNews'=> 'HomeController@adicionarNews',
];