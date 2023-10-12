<?php

namespace App\Controllers;

class usuario extends BaseController
{
    public function index()
    {
        
        echo view('usuario');
        echo view('foot');
    }
    public function criausuario()
    {
        $tabela = $this->db->table('usuario');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        $r = $tabela->insert(
            [
                'nome_usuario'=>$nome,
                'senha_usuario'=>$senha,
                
            ]);
       if($r){
        $usuario = array(
            'nome_usuario'=>$nome,
            'senha_usuario'=>$senha,
            
        );
        
        session()->set('usuario', $usuario);
        // echo '<pre>'; print_r($_SESSION); echo '</pre>';
        return redirect()->to($GLOBALS['baseurl'] . '/sbadm');
       }
    }
   
}
