<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/sbadm');
        }
        echo view("adm/login.php");
    }
    public function login()
    {
        $tabela = $this->db->table('usuario');
        $usuario = $this->db->table('usuario')->getWhere([ 'nome_usuario' => $_POST['nome'], 'senha_usuario' => $_POST['senha'] ])->getRowArray();
        if($usuario){
            session()->set('usuario', $usuario);
            return redirect()->to($GLOBALS['baseurl'] . '/sbadm');
        }else{
            return redirect()->to($GLOBALS['baseurl'].'/login');
        }
    }
}
