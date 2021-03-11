<div class="form-group">
    <label for="nome">Nome</label>
    <input type="text"  {{$visualizar}} required name="nome" class="form-control" value="{{isset($registro->nome) ? $registro->nome : ''}}" aria-describedby="nome">
    <label for="email">E-mail</label>
    <input type="email" {{$visualizar}} required name="email" class="form-control" value="{{isset($registro->email) ? $registro->email : ''}}" aria-describedby="email">
    {{-- <label for="telefone" >Telefone</label>
    <input type="text"  name="telefone" class="form-control" value="{{isset($registro->telefone) ? $registro->telefone : ''}}" aria-describedby="telefone"> --}}
    <label for="linkedIn" >LinkedIn</label>
    <input type="text" {{$visualizar}} name="linkLinkedIn" class="form-control" value="{{isset($registro->linkLinkedIn) ? $registro->linkLinkedIn : ''}}" aria-describedby="linkedIn">
    <label for="facebook">Facebook</label>
    <input type="text" {{$visualizar}} name="linkFacebook" class="form-control" value="{{isset($registro->linkFacebook) ? $registro->linkFacebook : ''}}" aria-describedby="facebook">    
  </div>

  