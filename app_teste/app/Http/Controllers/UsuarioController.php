<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuario = new Usuario;

        $user = $usuario->getUsuario();
        $lista = Usuario::listaUsuarios();

        return view('usuario.index', compact('user', 'lista'));
    }
}
