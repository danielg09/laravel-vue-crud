var urlUsers = 'https://jsonplaceholder.typicode.com/users';
new Vue({
	el:'#main',
	created: function() {
		this.getUsers();
	},
	data: {
		list: []
	},
	methods: {
		getUsers: function(){
			axios.get(urlUsers).then(response => {
			this.list = response.data;
			});
		}
	}
});