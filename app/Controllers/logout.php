<?php

namespace App\Controllers;

class logout extends BaseController
{
    public function index()
    {
        
        session()->destroy();
        return redirect()->to($GLOBALS['baseurl'] . '/login');
        
    }
   
}