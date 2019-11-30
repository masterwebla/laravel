@extends('template')
@section('titulo','Listado de Servicios')

@section('contenido')
	<h1 class="text-center">Listado de Servicios</h1>
	<a class="btn btn-success" href="{{route('servicios.create')}}">Nuevo</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($servicios as $servicio)
				<tr>
					<td>{{$servicio->nombre}}</td>
					<td>{{$servicio->descripcion}}</td>
					<td>
						<a class="btn btn-warning" href="">Editar</a>
						<a class="btn btn-danger" href="">Borrar</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection