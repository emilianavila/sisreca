@extends('layouts.plantilla')
@section('title','IDTSG - ', $idtsg)
@section('content')
    <a href="{{route('idtsgs.index')}}">Volver</a>
    <h1>Bienvenido - IDTSG - {{$idtsg}}</h1>
@endsection
