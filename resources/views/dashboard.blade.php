@extends('app')

@section('content')
	
<div id="crud" class="row">
	
	<div class="col s12">
		<h1>
			CRUD Laravel y Vue
		</h1>
	</div>

	<div class="col s12">
		  <a class="waves-effect waves-light btn modal-trigger" href="#create">Nueva Tarea</a>

	</div>

	<div style="margin-top: 5px" class="col s6">
		<table class="highlight striped ">
			<thead>
				<tr>
					<th>Id</th>
					<th>Tarea</th>
					<th colspan="2">Acción</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="keep in keeps">
					<th>@{{ keep.id }}</th>
					<th>@{{ keep.keep }}</th>
					<th>
						<a href="#" class="btn-small" v-on:click.prevent="editKeep(keep)">Editar</a>
					</th>
					<th>
						<a href="#" class="btn-small" v-on:click.prevent="deleteKeep(keep)">Eliminar</a>
					</th>
				</tr>				
			</tbody>	
		</table>
		@include('create')
		@include('edit')
	</div>

	<div class="col s6">
		<pre>
			@{{ $data }}
		</pre>
	</div>

</div>


@endsection