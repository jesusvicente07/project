@extends('layouts.layout')
@section('section')

<div class="col-md-7
">
@if(session('mensaje'))
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{session('mensaje')}}
</div>
@endif

<form action="{{route('update',$user->id)}}" method="POST">
    @csrf

    <h3>Nombre:</h3>
    <input type="text" name="name" class="form-control mb-2" value="{{ $user->name }}" autocomplete="off">
    @error('name')
    <div class="alert alert-danger">
      El nombre es obligatorio
    </div>
    @enderror

    <h3>Correo:</h3>
    <input type="text" name="email" class="form-control mb-2" value="{{ $user->email }}" disabled autocomplete="off">
   
    <h3>Contraseña:</h3>
    <input type="text" name="password" class="form-control mb-2"  autocomplete="off">
    @error('password')
    <div class="alert alert-danger">
    {{$errors->first('password')}}
    </div>
    @enderror

    <h3> Confirmar contraseña:</h3>
    <input type="text" id="password-confirm" name="password_confirmation" class="form-control mb-2"  autocomplete="off">
   
    <div>
    <button class="btn btn-primary btn-block" type="submit">Editar</button>
    </div>
    
    </form>
    </div>
@endsection