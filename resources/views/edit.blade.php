<form method="POST" v-on:submit.prevent="updateKeep(fillKeep.id)">
  <div id="edit" class="modal">
    <div class="modal-content">
      <h4>Actualizar tarea</h4>
      <div class="input-field col s6">
          <input id="keep" placeholder="" name="keep" type="text" v-model="fillKeep.keep">
          <label for="keep">Editar Tarea</label>
          <span class="red-text" v-for="error in errors">@{{ error }}</span>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn light-blue darken-1">Actualizar</button>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>
</form>
          