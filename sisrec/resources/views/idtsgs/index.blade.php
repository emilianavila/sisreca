@extends('layouts.plantilla')
@section('title','IDTSG')
@section('content')
    <h1>Bienvenido a la página principal - IDTSG</h1>
    <li><a href="{{route('idtsgs.crear_fp770')}}">Preliquidación IDTSG F-770</a></li>
    <li><a href="{{route('idtsgs.crear_fp750')}}">Preliquidación IDTSG F-750</a></li>
    <li><a href="{{route('idtsgs.crear_fo770')}}">Form. oficial IDTSG F-770</a></li>
    <li><a href="{{route('idtsgs.crear_fo750')}}">Form. oficial IDTSG F-750</a></li>

@endsection