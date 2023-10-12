<?php

namespace App\Controllers;

class sbadm extends BaseController
{
    public function index()
    { 
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
           echo view("adm/index.php");
         var_dump(session()->get('usuario'));

        
    }
    public function charts()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
       echo view("adm/charts.php");
    }
    public function forgot()
    {
        
       echo view("adm/forgot-password.php");
    }
    public function login()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
       echo view("adm/login.php");
    }
    public function register()
    {
        
       echo view("adm/register.php");
    }
    public function pagenotfound()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
       echo view("adm/404.php");
    }
    public function blank()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
       echo view("adm/blank.php");
    }
    public function color()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        echo view("adm/utilities-color.php");
    }
    public function border()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        echo view("adm/utilities-border.php");
    }
    public function animation()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        echo view("adm/utilities-animation.php");
    }
    public function others()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        echo view("adm/utilities-other.php");
    }
    public function buttons()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        echo view("adm/buttons.php");
    }
    public function cards()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        echo view("adm/cards.php");
    }
}