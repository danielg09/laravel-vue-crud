<form method="POST" v-on:submit.prevent="createKeep">
  <div id="create" class="modal">
    <div class="modal-content">
      <h4>Nueva tarea</h4>
      <div class="input-field col s6">
          <input id="keep" placeholder="" name="keep" type="text" v-model="newKeep">
          <label for="keep">Crear Tarea</label>
          <span class="red-text" v-for="error in errors">@{{ error }}</span>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn light-blue darken-1">Guardar</button>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>
</form>
          