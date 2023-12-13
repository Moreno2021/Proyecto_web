<!-- Modal de Edición -->
<div class="modal fade" id="edit{{ $asesor->id_asesor }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Asesor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('asesores.update', $asesor->id_asesor) }}" method="post" enctype="multipart/form-data" id="editarAsesorForm{{$asesor->id_asesor}}">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="NombreAsesorE" class="form-label">Nombre del Asesor</label>
            <input type="text" class="form-control" name="NombreAsesorE" id="NombreAsesorE" value="{{ $asesor->nombre_asesor }}" required>
            <small class="text-danger" id="errorNombreAsesorE"></small>
          </div>
          <div class="mb-3">
            <label for="ProfesionAsesorE" class="form-label">Profesion del Asesor</label>
              <select class="form-select" name="ProfesionAsesorE" id="ProfesionAsesorE" required oninput="validarProfesionAsesor()">
                <option value="">Selecciona una Profesión</option>
                <option value="Profesional SST" @if(old('ProfesionAsesorE', $asesor->profesion_asesor) == 'Profesional SST') selected="selected" @endif>Profesional SST</option>
                <option value="Tecnologo SST" @if(old('ProfesionAsesorE', $asesor->profesion_asesor) == 'Tecnologo SST') selected="selected" @endif>Tecnologo SST</option>
                <option value="Tecnico SST" @if(old('ProfesionAsesorE', $asesor->profesion_asesor) == 'Tecnico SST') selected="selected" @endif>Tecnico SST</option>
              </select>
            <small class="text-danger" id="errorProfesionAsesorE"></small>
          </div>

          
          
          <div class="mb-3">
            <label for="licenciaAsesorE" class="form-label">Licencia del Asesor</label>
            <input type="number" class="form-control" name="licenciaAsesorE" id="licenciaAsesorE" value="{{ $asesor->licencia_asesor }}" required>
            <small class="text-danger" id="errorLicenciaAsesorE"></small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-outline-primary" onclick="validarFormularioEdicionAsesor('{{$asesor->id_asesor}}')">Guardar</button>
        </div>
      </form>
    </div>
  </div>
 </div>
 
 <script>
  function mostrarSweetAlert(icon, title, text) {
    Swal.fire({
      icon: icon,
      title: title,
      text: text
    });
  }

  function validarNombreE(idAsesor) {
    var nombreAsesorE = document.getElementById('NombreAsesorE' + idAsesor).value;
    var nombreValidoE = /^[a-zA-Z\s]+$/.test(nombreAsesorE);
    document.getElementById('errorNombreE' + idAsesor).innerText = nombreAsesorE ? (nombreValidoE ? '' : 'El nombre no válido, solo letras y espacios') : 'Campo obligatorio';
  }

  function validarNITE(idAsesor) {
    var nitAsesorE = document.getElementById('ProfesionAsesorE' + idAsesor).value;
    var nitValidoE = /^\d+$/.test(nitAsesorE);
    document.getElementById('errorNITE' + idAsesor).innerText = nitAsesorE ? (nitValidoE ? '' : 'La profesion no es válida, elije una opcion') : 'Campo obligatorio';
  }

  function validarTelefonoE(idAsesor) {
    var LicenciaAsesorE = document.getElementById('licenciaAsesorE' + idAsesor).value;
    var telefonoValidoE = /^\d+$/.test(LicenciaAsesorE);
    document.getElementById('errorTelefonoE' + idAsesor).innerText = LicenciaAsesorE ? (telefonoValidoE ? '' : 'La licencia no es válida, solo numeros y espacios') : 'Campo obligatorio';
  }

  function validarFormularioEdicionAsesor(idAsesor) {
    validarNombreAsesorE(idAsesor);
    validarProfesionAsesorE(idAsesor);
    validarlicenciaAsesorE(idAsesor);

    var NombreAsesorE = document.getElementById('NombreAsesorE' + idAsesor).value;
    var ProfesionAsesorE = document.getElementById('ProfesionAsesorE' + idAsesor).value;
    var licenciaAsesorE = document.getElementById('licenciaAsesorE' + idAsesor).value;


    if (!NombreAsesorE || !ProfesionAsesorE || !licenciaAsesorE) {
      // Si hay algún error de validación, muestra el SweetAlert de error
      mostrarSweetAlert('error', 'Error', 'Por favor, completa los campos correctamente.');
    } else {
      // Si todo es válido, puedes mostrar una alerta de éxito
      

      // Aquí debes enviar el formulario
      document.getElementById('editarAsesorForm' + idAsesor).submit();
    }
  }

  // Agrega los event listeners para la validación en tiempo real
  document.getElementById('NombreAsesorE{{$asesor->id_asesor}}').addEventListener('input', function() { validarNombreAsesorE('{{$asesor->id_asesor}}'); });
  document.getElementById('ProfesionAsesorE{{$asesor->id_asesor}}').addEventListener('input', function() { validarProfesionAsesorE('{{$asesor->id_asesor}}'); });
  document.getElementById('licenciaAsesorE{{$asesor->id_asesor}}').addEventListener('input', function() { validarlicenciaAsesorE('{{$asesor->id_asesor}}'); });
</script>