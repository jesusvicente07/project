@extends('layouts.layout')
@section('section')

@section('title')
Editar: {{$user->email}}
@endsection
<div class="col-md-7">
@if (session('mensaje'))
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ session('mensaje') }}
    </div>
@endif

<form action="{{route('update',$user->id)}}" method="POST">
    @csrf

    <h3>Nombre:</h3>
    <input type="text" name="name" class="form-control mb-2" value="{{ $user->name }}" autocomplete="off" required minlength=3>
    @error('name')
    <div class="alert alert-danger">
      El nombre es obligatorio
    </div>
    @enderror

    <h3>Correo:</h3>
    <input type="text" name="email" class="form-control mb-2" value="{{ $user->email }}" disabled autocomplete="off" minlength=3>
   
    <h3>Contraseña:</h3>
    <input type="password" name="password" class="form-control mb-2"  autocomplete="off" minlength=3>

    <h3> Confirmar contraseña:</h3>
    <input type="password" id="password-confirm" name="password_confirmation" class="form-control mb-2" autocomplete="off" minlength=3>

    @error('password')
    @if($errors->first('password')=='The password confirmation does not match.')
    <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    La contraseña no coincide
    </div>
    @endif 
    @enderror
    <div class="float-right">
    <button class="btn btn-primary" type="submit">Actualizar usuario</button>
    </div>
    
    </form>
    </div>

    @section('script')
    <script>
    $('#password-confirm').keyup(function(){
      $('#pass-alert').css('display','none')
    });
    </script>
    @endsection
    
@endsection