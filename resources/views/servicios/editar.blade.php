@extends('template')
@section('titulo','Editar Servicio')

@section('contenido')
	<h1>Editar Servicio</h1>
	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{ route('servicios.update',$servicio->id) }}" method="post">
		@csrf
		<input type="hidden" name="_method" value="put">
		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" class="form-control" value="{{$servicio->nombre}}">
		</div>
		<div class="form-group">
			<label for="descripcion">Descripcion</label>
			<textarea name="descripcion" class="form-control">{{$servicio->descripcion}}</textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-success">Actualizar Servicio</button>
		</div>
	</form>

@endsection