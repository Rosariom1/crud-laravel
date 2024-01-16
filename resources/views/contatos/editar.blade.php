@extends('layouts.header-footer')
@section('content')
<div class="panel-body">
<form class="row g-3" action="{{route('actualizar_contatos', ['id'=>$contato->id ])}}" method="post">
  @csrf 
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nome</label>
    <input type="text" class="form-control is-valid" value="{{ $contato->nome }}" name="nome"  required>
    
</div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Contato</label>
    <input type="text" class="form-control is-valid" value="{{ $contato->contato }}" name="contato" required>
    
  </div>

  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Email</label>
    <input type="text" class="form-control is-valid" value="{{ $contato->email }}" name="email" required>
    
  </div>

  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Actualizar</button>
  </div>
</form>
</div>
@endsection