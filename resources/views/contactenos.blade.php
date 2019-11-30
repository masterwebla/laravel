@extends('template')
@section('titulo')
	Contactenos
@endsection
@section('contenido')
	<h1>Contactenos</h1>
	<p>Hola, {{$nombre}} déjenos su pregunta</p>
	<p>Su edad es {{$edad}} años</p>

	@if($edad >= 18)
		<p>Usted es mayor de edad</p>
	@else
		<p>Usted es menor de edad</p>
	@endif


	@for($i=1;$i<=20;$i++)
		<p>Numero {{$i}}</p>
	@endfor
@endsection