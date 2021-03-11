@extends('layout.site')

@section('titulo', 'Teste Tray')

@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar Contato</h3>
    <form action="{{route('admin.contatos.salvar')}}" method="post">
        {{ csrf_field() }}
        @include('admin.contatos._form')  

        <button class="btn btn-success">Salvar</button>
    </form>
   
</div>
@endsection