<?php

class HomeController extends RenderViews
{
    private $newsDAO;

    public function __construct()
    {
        $this->newsDAO = new NewsDAO();
    }

    public function index()
    {
        $this->loadView('homepage', []);
    }

    public function sign()
    {
        $this->loadView('sign', []);
    }

    public function desporto()
    {
        $this->loadView('Desporto', ['news' => $this->newsDAO->getDesporto()]);
    }
    public function economia()
    {
        $this->loadView('Economia', ['news' => $this->newsDAO->getEconomia()]);
    }

    public function mundo()
    {
        $this->loadView('Mundo', ['news' => $this->newsDAO->getNews()]);
    }

    public function politica()
    {
        $this->loadView('Politica', ['news' => $this->newsDAO->getPolitica()]);
    }

    public function saude()
    {
        $this->loadView('Saude', ['news' => $this->newsDAO->getSaude()]);
    }


    public function contact()
    {
        $this->loadView('contact-page', []);
    }

    public function cadastrar()
    {
        $this->loadView('cadastrar', []);
    }

    public function adicionarNews()
    {
        $this->loadView('adicionarNews', []);
    }


    public function loginAdmin()
    {
        $this->loadView('loginAdmin', []);
    }


    public function visualizarNews()
    {
        $this->loadView('visualizarNews', ['news' => $this->newsDAO->getNews()]);
    }

    public function perfilAdmin()
    {
        $this->loadView('perfilAdmin', []);
    }
    
}
