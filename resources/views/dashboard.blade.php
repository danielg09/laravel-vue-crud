@extends('app')

@section('content')
	
<div id="crud" class="row">
	
	<div class="col-md-12">
		<h1 class="display-3">
			CRUD Laravel y Vue
		</h1>
	</div>

	<div class="col-md-7">
		<a href="#" class="btn btn-primary">Nueva Tarea</a>
	</div>

	<div style="margin-top: 5px" class="col-md-7">
		<table class="table table-hover table-striped ">
			<thead>
				<tr>
					<th>Id</th>
					<th>Tarea</th>
					<th>
						Acción
					</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="keep in keeps">
					<th>@{{ keep.id }}</th>
					<th>@{{ keep.keep }}</th>
					<th>
						<a href="#" class="btn btn-warning btn-sm">Editar</a>
						<a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
					</th>
				</tr>				
			</tbody>	
		</table>
	</div>

	<div class="col-md-5">
		<pre>
			@{{ $data }}
		</pre>
	</div>

</div>


@endsection