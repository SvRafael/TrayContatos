<div class="form-group">
    <label for="telefone" >Telefone</label>
    <input type="text" {{$visualizar}} name="telefone" class="form-control" value="{{isset($registro->telefone) ? $registro->telefone : ''}}" aria-describedby="telefone">
  </div>

  