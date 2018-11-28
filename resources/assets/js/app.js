new Vue({
	el:'#crud',

	created: function(){
		this.getKeeps();
	},

	data: {
		keeps: [],
		newKeep: '',
		fillKeep: {'id': '', 'keep': ''},
		errors: []
	},

	methods: {

		getKeeps: function(){
			var urlKeeps="tasks";
			axios.get(urlKeeps).then(response => {
				this.keeps = response.data;
			});
		},

		deleteKeep: function(keep){
			var url = "tasks/destroy/" + keep.id;
			axios.delete(url).then(response =>{
				this.getKeeps();
				toastr.success('Registro eliminado con exito');
			});
		},

		createKeep: function(){
			var url = 'tasks';

			axios.post(url, {
				keep: this.newKeep
			}).then(response =>{
				this.getKeeps();
				this.newKeep = '';
				this.errors = [];
				$('#create').modal('close');
				toastr.success('Registro creado con exito');
			}).catch(error => {
				this.errors = error.response.data;
			});
		},

		editKeep: function(keep){
			this.fillKeep.id = keep.id;
			this.fillKeep.keep = keep.keep;
 			$('#edit').modal('open');
		},

		updateKeep: function(id){
			var url = "tasks/update/" + id;
			axios.put(url, this.fillKeep).then(response => {
				this.getKeeps();
				this.fillKeep = {'id': '', 'keep': ''};
				this.errors = [];
				$('#edit').modal('close');
				toastr.success('Registro actualizado con exito');
			}).catch(error => {
				this.errors = error.response.data;
			});
		}
	}

});

$(document).ready(function(){
    
    $('#create').modal();
    $('#edit').modal();


});