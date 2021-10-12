@extends('layout.layout')
@section('title','Nueva')
@section('content')
	<h3>Crear nueva categoría</h3>
	
	@if (session('status'))
		<div class="alert alert-warning">
		{{ session('status') }}
		</div>
	@endif
	
	<form action="{{ route('categorias.store') }}" method="POST">
		@csrf
		<div class="mb-3">
			<label for="nombre" class="form-label">Nombre de categoría</label>
			<input type="text" class="form-control" id="nombre" name="nombre">
		</div>
		<button type="submit" title="delete" class="btn btn-success">Registrar</button>
	</form>
@endsection