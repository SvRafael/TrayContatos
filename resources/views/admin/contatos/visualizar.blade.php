@extends('layout.site')

@section('titulo', 'Teste Tray')

@section('conteudo')
<div class="container">
    <h3 class="center">Visualizar Contato</h3>
    <form action="{{route('admin.contatos.visualizar', $registro->id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="get">
        @include('admin.contatos._form')  

        <a class="btn btn-success" href="{{route('admin.contatos')}}">Voltar</a>
    </form>
   
</div>
@endsection