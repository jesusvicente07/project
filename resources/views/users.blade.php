@extends('layouts.layout')

@section('section')

@if (session('mensaje'))
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ session('mensaje') }}
    </div>
@endif

  <div class="container my-4">
  <a href="{{route('create')}}" class="btn btn-primary btn-sm float-sm-right mt-5 mb-5">Nuevo usuario</a>
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
      <a href="{{route('edit',$item)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" style="font-size:150%"></i></a>
      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$item->id}}"><i class="fa fa-close" style="font-size:150%"></i></button>

    <!-- Modal -->
    <div class="modal fade" id="myModal{{$item->id}}" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <strong>Seguro que desea eliminar al usuario:</strong>
            <p class="ml-5">{{$item->email}}</p>
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
  {{$users->links()}}
    </div>

@endsection