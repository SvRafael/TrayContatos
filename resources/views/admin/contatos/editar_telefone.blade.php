@extends('layout.site')

@section('titulo', 'Teste Tray')

@section('conteudo')
<div class="container">
    <h3 class="center">Telefone do Contato - {{$registro->nome}}</h3>
    <form action="{{route('admin.contatos.telefone.atualizar', $registro->id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.contatos._telform')  
        
        <button class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection