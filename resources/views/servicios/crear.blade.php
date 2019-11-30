@extends('template')
@section('titulo','Crear Servicios')

@section('contenido')
	<h1>Crear Servicio</h1>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{ route('servicios.store') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" required class="form-control">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<textarea name="descripcion" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-success">Guardar Servicio</button>
		</div>
	</form>

@endsection