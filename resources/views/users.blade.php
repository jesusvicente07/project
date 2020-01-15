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
      <button type="button" class="btn btn-danger btn-sm" onclick="Mymodal({{$item}})"><i class="fa fa-close" style="font-size:150%"></i></button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  {{$users->links()}}
    </div>
     <!-- Modal -->
     <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <strong>Seguro que desea eliminar al usuario:</strong>
            <p class="ml-5" id="text"></p>
          </div>
          <div class="modal-footer">
          <form action="#" id="formModal" method="POST" class="d-inline col-md-10">
          @method('DELETE')
          @csrf
          <button type="submit "class="btn btn-default">Eliminar</button>
          </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          </div>
      </div> 
    @section('script')
    <script>
    function Mymodal(user){
      $('#text').html(user.email);
      $('#formModal').attr('action', '/users/delete/'+user.id);
      $('#myModal').modal();
    }
    </script>
    @endsection

@endsection