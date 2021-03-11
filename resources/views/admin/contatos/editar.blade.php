@extends('layout.site')

@section('titulo', 'Teste Tray')

@section('conteudo')
<div class="container">
    <h3 class="center">Editar Contato</h3>
    <form action="{{route('admin.contatos.atualizar', $registro->id)}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin.contatos._form')  

        <button class="btn btn-success">Atualizar</button>
    </form>
   
</div>
@endsection