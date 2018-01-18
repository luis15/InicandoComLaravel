@extends('layout.principal')

@section('titulo', 'Home')

@section('navbar')
    @parent
    <p>nova navBar</p>
@endsection

@section('conteudo')
    <p>Aqui é o conteudo da home</p>
    @if(2 === 1)
        Ïgual
    @elseif(2>1)
        Maior
    @endif
    <br/>
    @for($i = 0; $i < 3; $i++)
        Contando com o for {{$i}}<br/>
    @endfor

    @foreach($usuarios as $usuario)
        <p>Nome:{{$usuario['nome']}}</p>
    @endforeach

    @forelse($livros as $livro)
        {{livro['nome']}}
        @empty
            <p>Sem registros</p>
    @endforelse

    <?php $i = 0 ?>
    @while($i <= 4)
        <p>Esse é o while {{$i++}}</p>
    @endwhile
@endsection
