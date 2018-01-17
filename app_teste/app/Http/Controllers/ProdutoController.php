<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function getIndex(){
      return "Index de produto";
    }
    public function getLista(){
      return "Lista de Produtos";
    }
    public function postLista(){
      return "Lista de Produtos";
    }

}
