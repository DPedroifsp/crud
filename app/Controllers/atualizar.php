<?php

namespace App\Controllers;

class atualizar extends BaseController
{
    
    public function altera($id)
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
       $tabela = $this->db->table('carros');
       $tabela->where('id_carro', $id);
       $carros = $tabela->get()->getResultArray();
       
       echo view('adm/atualizar.php',['carros'=>$carros]);
       
      
    }
    public function index()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/login');
        }
        $id = $_POST['id'];
        $tabela = $this->db->table('carros');
        $dados = array(
            'modelo'=>$_POST['modelo'],
            'marca'=>$_POST['marca'],
            'cor'=>$_POST['cor'],
            'ano'=>$_POST['ano'],
        );
        $r = $tabela->where('id_carro', $id)->update($dados);
        if($r) $msg = "sucesso";else $msg = "erro";
        header("Refresh: 0 url=/crud/public/tables");
    }

   
}