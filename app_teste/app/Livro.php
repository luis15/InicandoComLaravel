<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'descricao'];
    public function ListaLivros(){
        return $this->all();
    }
}
