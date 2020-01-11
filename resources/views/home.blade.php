@extends('layouts.layout')
@section('section')
<div class="col-md-3">
<div class="small-box bg-warning">
    <div class="inner">
    <h1>{{$users}}</h1>

    <p>Usuarios registrados</p>
    </div>
    <div class="icon">
    <i class="ion ion-person"></i>
    </div>
</div>
</div>
@endsection