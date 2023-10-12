<?php

namespace App\Controllers;

class empresa extends BaseController
{
    public function index()
    {
        session_start();
        $sess = $_SESSION['usuario']['adm'];
        echo view('nav', ['sess'=>$sess]);
        echo view('empresa');
        echo view('foot');
    }
 
}