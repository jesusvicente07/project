@extends('layouts.layout')
@section('section')
<div class="col-md-3">
<div class="small-box bg-warning">
    <div class="inner">
    <h3>44</h3>

    <p>Usuarios registrados</p>
    </div>
    <div class="icon">
    <i class="ion ion-person-add"></i>
    </div>
    <a href="{{route('users')}}" class="small-box-footer">Mas Info<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
@endsection