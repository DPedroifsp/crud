<?php

namespace App\Controllers;

class remover extends BaseController
{
  
    public function remove($id)
    {
        
        $tabela = $this->db->table('carros');
       
        
        $tabela->where('id_carro', $id);
        $tabela->delete();
        

        header("Refresh: 0 url=/crud/public/tables");
    }
    
}