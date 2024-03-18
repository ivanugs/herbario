@extends('layouts.plantilla')

@section('title', $species->scientific_name)

@section('content')
    <h1>Bienvenido a la pagina planta: {{ $species->scientific_name }} </h1>
    <a href="{{route('species.index')}}">Volver al listado de plantas</a>
@endsection
