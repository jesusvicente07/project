@extends('layouts.layout')
@section('section')

<form action="{{route('store')}}" method="POST">
    @csrf

    <h3>Nombre:</h3>
    <input type="text" name="name" class="form-control mb-2" value="{{ old('name') }}" autocomplete="off">
    @error('name')
    <div class="alert alert-danger">
      El nombre es obligatorio
    </div>
    @enderror

    <h3>Correo:</h3>
    <input type="text" name="email" class="form-control mb-2" value="{{ old('email') }}" autocomplete="off">
    @error('email')
    <div class="alert alert-danger">
      El correo es obligatorio
    </div>
    @enderror

    <h3>Contraseña:</h3>
    <input type="text" name="password" class="form-control mb-2" value="{{ old('password') }}" autocomplete="off">
    @error('password')
    <div class="alert alert-danger">
      La contraseña es obligatoria
    </div>
    @enderror

    <h3> Confirmar contraseña:</h3>
    <input type="text" name="confirmpass" class="form-control mb-2" value="{{ old('confirmpass') }}" autocomplete="off">
    @error('confirmpass')
    <div class="alert alert-danger">
      La contraseña es obligatoria
    </div>
    @enderror
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>

@endsection