<?php

namespace App\Controllers;

class ver extends BaseController
{
    public function index()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
            $msg = $erro ='';
            $tabela = $this->db->table('carros');
            $carros = $tabela->get()->getResultArray();
           
            echo view('adm/tables',['msg'=>$msg,'erro'=>$erro,'carros'=>$carros,]);
            
        
       
    }
    public function buscar()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        $tabela = $this->db->table('carros');
        $buscado = $_POST['busca'];
        $carros = $tabela->getWhere("marca LIKE '%$buscado%' OR modelo LIKE '%$buscado%' OR ano LIKE '%$buscado%'")->getResultArray();
        
        echo view('adm/tables',['carros'=>$carros,]);
       
    }
}