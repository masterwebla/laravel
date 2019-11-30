@extends('template')
@section('titulo','Listado de Productos')

@section('contenido')
	<h1>Listado de Productos</h1>

	@foreach($productos as $producto)
		{{$producto->nombre}} <br>
	@endforeach

@endsection