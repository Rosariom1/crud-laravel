@extends('layouts.header-footer')
@section('content')
<div class="panel-body">
<form class="row g-3" action="{{ route('salvar_contatos') }}" method="post">
  @csrf 
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nome</label>
    <input type="text" class="form-control is-valid" name="nome"  required>
    
</div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Contato</label>
    <input type="text" class="form-control is-valid" name="contato" required>
    
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Email</label>
    <input type="text" class="form-control is-valid" name="email" required>
    

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </div>
</form>
</div>
@endsection