@extends('layout.site')

@section('titulo', 'Teste Tray')

@section('conteudo')
<div class="container">
  <div class="row form-group" style="margin-top: 10px">
    <div class="small-box col-md-4" style="background-color: blue; margin-left: 150px">
      <div class="inner">
          <h3>{{$cadastradosSemana -> total}}</h3>

          <p>Cadastros na ultima semana</p>
    </div>
  </div>
  <div class="small-box col-md-4" style="background-color: rgb(255, 102, 0); margin-left: 150px">
    <div class="inner">
        <h3>{{$cadastradosHora -> total}}</h3>

        <p>Cadastros por hora</p>
  </div>
</div>     
</div>

 
</div>

<div style="padding: 2rem">
<h3 class="center">Lista de Contatos</h3>
<div>
    <a class="btn btn-primary" href="{{route('admin.contatos.adicionar')}}">Adicionar</a>
</div>
<div class="row">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">LinkedIn</th>
            <th scope="col">Facebook</th>
            <th scope="col">Ação</th>
            <th scope="col">Telefone Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            
            <td>{{ $registro -> id}}</td>
            <td>{{ $registro -> nome}}</td>
            <td>{{ $registro -> email}}</td>
            <td>{{ $registro -> telefone}}</td>
            <td><a href="{{$registro -> linkLinkedIn}}" target="_blank">LinkedIn</a></td>
            <td><a href="{{$registro -> linkFacebook}}" target="_blank">Facebook</a></td>
            <td>
                <a class="btn btn-primary" href="{{route('admin.contatos.visualizar', $registro -> id)}}">Visualizar</a>
                <a class="btn btn-warning" href="{{route('admin.contatos.editar', $registro -> id)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('admin.contatos.deletar', $registro -> id)}}">Deletar</a>
            </td>
            <td>
              <a class="btn btn-success" href="{{route('admin.contatos.telefone.visualizar', $registro -> id)}}">Visualizar Telefone</a>
              <a class="btn btn-success" href="{{route('admin.contatos.telefone.editar', $registro -> id)}}">Criar/Editar Telefone</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
</div>
@endsection