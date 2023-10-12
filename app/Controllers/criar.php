<?php

namespace App\Controllers;

class criar extends BaseController
{
    public function index()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        
        echo view('adm/criar.php');
        
    }
    public function cadastrar()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        $tabela = $this->db->table('carros');
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $cor = $_POST['cor'];
        $ano = $_POST['ano'];
        $r = $tabela->insert(
            [
                'modelo'=>$modelo,
                'marca'=>$marca,
                'cor'=>$cor,
                'ano'=>$ano,
            ]
            );
       header("Refresh: 0 url=/crud/public/tables");
    }
}