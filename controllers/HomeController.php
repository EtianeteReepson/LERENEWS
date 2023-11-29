<?php

class HomeController extends RenderViews
{
    public function index()
    {
        $this->loadView('homepage', [

        ]);
    }

    public function sign()
    {
        $this->loadView('sign', []);
    }

    public function desporto()
    {
        $this->loadView('Desporto', []);
    }
    public function economia()
    {
        $this->loadView('Economia', []);
    }

    public function mundo()
    {
        $this->loadView('Mundo', []);
    }

    public function politica()
    {
        $this->loadView('Politica', []);
    }

    public function saude()
    {
        $this->loadView('Saude', []);
    }


    public function contact(){
       
        $this->loadView('contact-page', []);
    }
}