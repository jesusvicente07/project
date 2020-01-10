@extends('layouts.layout')

@section('title')
<h1>hola</h1>
@endsection

@section('section')

  <div class="container my-4">
  <a href="" class="btn btn-success btn-sm float-sm-right mt-5 mb-5">Nuevo usuario</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Usuarios</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $item)
    <tr>
      <td scope="row">{{$item->email}}</td>
      <td>
      <a href="" class="btn btn-warning btn-sm">Editar</a>
      <form action="" method="POST" class="d-inline">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>

@endsection