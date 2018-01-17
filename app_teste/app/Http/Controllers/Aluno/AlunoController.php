<?php

namespace App\Http\Controllers\Aluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    public function Index(){
      return 'index de alunos <a href = "'.route('livro.index').'">Livro</a>' ;
    }
}
