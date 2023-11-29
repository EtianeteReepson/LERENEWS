<?php

$routes = [
    '/' => 'HomeController@index',
    '/users/{id}' => 'UserController@show',
    '/sign' => 'HomeController@sign',
    '/desporto' => 'HomeCOntroller@desporto',
    '/economia' => 'HomeCOntroller@economia',
    '/mundo' => 'HomeCOntroller@mundo',
    '/politica' => 'HomeCOntroller@politica',
    '/saude' => 'HomeCOntroller@saude',
    '/contact'=> 'HomeCOntroller@contact',
];