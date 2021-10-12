@extends('layout.layout')
@section('title','Listado de productos')
@section('content')
	
	<h2>Listado de productos</h2>
	
	@if (session('status'))
		<div class="alert alert-success">
		{{ session('status') }}
		</div>
	@endif
	
	<a class="btn btn-success" href="{{ url('/productos/create') }}" role="button">Nuevo producto</a>
	<a class="btn btn-success" href="{{ route('productos.create') }}" role="button">Nuevo producto</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
		@foreach($productos as $producto)
			<tr>
				<th scope="row">{{ $producto->producto_id }}</th>
				<td>{{ $producto->nombre }}</td>
				<td>
					<form action="{{ route('productos.destroy', $producto->producto_id) }}" method="POST">
                        <a href="{{ route('productos.show', $producto->producto_id) }}" title="show" class="btn btn-info">Ver</a>
                        <a href="{{ route('productos.edit', $producto->producto_id) }}" class="btn btn-secondary">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Eliminar</button>
                    </form>
				</td>
			</tr>
		@endforeach	
	  </tbody>
	</table>
	
@endsection