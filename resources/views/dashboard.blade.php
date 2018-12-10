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
	    <ul class="pagination">
		    <li v-if="pagination.current_page > 1" class="waves-effect">
		    	<a href="#" @click.prevent="changePage(pagination.current_page - 1)"><i class="material-icons">chevron_left</i></a>
		    </li>

		    <li v-for="page in pagesNumber" v-bind:class="[ page == isActived ? 'active' : 'waves-effect']"><a href="#" @click.prevent="changePage(page)">@{{ page }}</a></li>

		    <li v-if="pagination.current_page < pagination.last_page" class="waves-effect">
		    	<a href="#" @click.prevent="changePage(pagination.current_page + 1)"><i class="material-icons">chevron_right</i></a>
		    </li>
	    </ul>

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