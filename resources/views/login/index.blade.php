@extends('layout.site')

@section('titulo', 'Teste Tray')

@section('conteudo')
<div class="container">
    <h3 class="center">Login</h3>
    <form action="{{route('site.login.entrar')}}" method="post">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="nome">E-mail</label>
            <input type="email"  name="email" class="form-control"  aria-describedby="email">
            <label for="password">Senha</label>
            <input type="password" name="senha" class="form-control"  aria-describedby="passoword">
          </div>
        <button class="btn btn-success">Login</button>
    </form>
   
</div>
@endsection