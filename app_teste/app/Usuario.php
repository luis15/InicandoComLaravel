<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function getUsuario(){
        return "Get Usuário";
    }
    public static function listaUsuarios(){
        return "Lista de Usuários";
    }
}
