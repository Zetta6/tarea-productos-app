@extends('layout.layout')
@section('title','Listado de categorias')
@section('content')
	
	<h2>Listado de categorias</h2>
	
	@if (session('status'))
		<div class="alert alert-success">
		{{ session('status') }}
		</div>
	@endif
	
	<a class="btn btn-success" href="{{ url('/categorias/create') }}" role="button">Nueva categoría</a>
	<a class="btn btn-success" href="{{ route('categorias.create') }}" role="button">Nueva categoría</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categorias as $categoria)
			<tr>
				<th scope="row">{{ $categoria->categoria_id }}</th>
				<td>{{ $categoria->nombre }}</td>
				<td>
					<form action="{{ route('categorias.destroy', $categoria->categoria_id) }}" method="POST">
                        <a href="{{ route('categorias.show', $categoria->categoria_id) }}" title="show" class="btn btn-info">Ver</a>
                        <a href="{{ route('categorias.edit', $categoria->categoria_id) }}" class="btn btn-secondary">Editar</a>
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