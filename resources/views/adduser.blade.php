@extends('layouts.layout')
@section('section')
@section('title')
Agregar nuevo usuario
@endsection

<div class="col-md-8">
  <form action="{{route('store')}}" method="POST">
    @csrf

    <h3>Nombre:</h3>
    <input type="text" name="name" class="form-control mb-2" value="{{ old('name') }}" autocomplete="off" required>

    <h3>Correo:</h3>
    <input type="email" name="email" class="form-control mb-2" value="{{ old('email') }}" autocomplete="off" required>
 
    <h3>Contraseña:</h3>
    <input type="password" name="password" class="form-control mb-2" autocomplete="off" required>
    
    <h3> Confirmar contraseña:</h3>
    <input type="password" id="password-confirm" name="password_confirmation" class="form-control mb-2" autocomplete="off" required>
    @error('password')
    @if($errors->first('password')=='The password confirmation does not match.')
    <div class="alert alert-danger">
    La contraseña no coincide
    </div>
    @endif 
    @enderror
    <div class="float-right">
    <button class="btn btn-primary" type="submit">Agregar nuevo usuario</button>
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
