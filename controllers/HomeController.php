<?php
session_start();
class HomeController extends RenderViews
{
    private $newsDAO;
    private $editorDAO;
    private $session;
    public function __construct()
    {
        $this->newsDAO = new NewsDAO();
        $this->editorDAO = new EditorDAO();
        $this->session = new SessionManeger();
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


    public function visualizarNews()
    {
        $this->loadView('visualizarNews', ['news' => $this->newsDAO->getNews()]);
    }

    public function perfilAdmin()
    {
        $this->loadView('perfilAdmin', []);
    }

    public function loginEditor()
    {
        $this->loadView('loginEditor', []);
    }

    public function telaEditor()
    {
        $this->session->verify();
        $this->loadView('telaEditor', ['news' => $this->editorDAO->getNews()]);
    }

    public function listarUsuario()
    {
        $this->loadView('listarUsuario', []);
    }

    public function listarEditor()
    {
        $this->loadView('listarEditor', []);
    }

    public function adicionarNEditor()
    {
        $this->loadView('adicionarEditor', []);
    }

    public function cadastrarEditor()
    {
        $this->loadView('cadastrarEditor', []);
    }
}
