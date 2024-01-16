@extends('layouts.header-footer')
@section('content')
<div class="panel-body">
    <a href="{{route('criar_contatos')}}" class="btn btn-primary">Criar Contactos</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Contato</th>
      <th scope="col">Email</th>
      <th scope="col">Operações</th>

    </tr>
  </thead>
  <tbody>
    @foreach($rosario as $r)
    <tr>
      <th scope="row">{{$r->nome }}</th>
      <td>{{$r->contato }}</td>
      <td>{{$r->email }}</td>
      <td>
        <a href="{{route('eliminar_contatos', ['id'=>$r->id])}}" class="btn btn-danger">Eliminar</a>
        <a href="{{route('editar_contatos', ['id'=>$r->id])}}" class="btn btn-primary">Editar</a>
    
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</div>
@endsection