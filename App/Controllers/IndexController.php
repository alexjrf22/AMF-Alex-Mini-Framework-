<?php

namespace App\Controllers;
use AMF\Controller\Action;
use AMF\DI\Container;

class IndexController extends Action
{
   
    public function index() 
    {
        $cliente = Container::getModel("Cliente");
        $this->view->cliente = $cliente->fetchAll();          
        $this->render("index");
    }
    
    public function contact() 
    {
        $this->view->cars = array ("Mustang","Ferrari");
        $this->render("contact");
    }    
}
