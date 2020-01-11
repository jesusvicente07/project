@extends('layouts.layout')

@section('section')

@if (session('mensaje'))
    <div class="alert alert-success">
      {{ session('mensaje') }}
    </div>
@endif

  <div class="container my-4">
  <a href="{{route('create')}}" class="btn btn-success btn-sm float-sm-right mt-5 mb-5">Nuevo usuario</a>
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
      <a href="{{route('edit',$item)}}" class="btn btn-warning btn-sm">Editar</a>
      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$item->id}}">Eliminar</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <strong>Seguro que desea eliminar al usuario:</strong>
            <p>{{$item->email}}</p>
          </div>
          <div class="modal-footer">
          <form action="{{route('delete', $item)}}" method="POST" class="d-inline col-md-10">
          @method('DELETE')
          @csrf
          <button type="submit "class="btn btn-default">Eliminar</button>
          </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>

@endsection