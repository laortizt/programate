
<div class="mb-3">
    <label for="idprofesionalFK" class="form-label">Seleccione el profesional</label>
    
    <select class="form-select" aria-label="Default select example" name='idprofesionalFK' id="idprofesionalFK"
        value = "{{isset($certficate->idprofesionalFK)? $certficate->idprofesionalFK : old('idprofesionalFK')}}"
        aria-describedby="idprofesionalFKhelp"  required>
        <option selected>Selecione una opción</option>

        @foreach($profesionals as $a)
            <option value="{{$a->id}}">{{$a->nombre}} {{$a->apellido}}</option>
        @endforeach
    </select>


    @error('idprofesionalFK')
        <small id="idprofesionalFKhelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
       
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio
    </div>
</div>


<div class="mb-3">

    <label for="jobTitle" class="form-label">Nombre del cargo</label>
    <input type="text" name="jobTitle" id="jobTitle" class="form-control" value="{{isset($certficate->jobTitle)?$certficate->jobTitle:old('jobTitle')}}"aria-describedby="jobTitlehelp" required >

    @error('jobTitle')
        <small id="jobTitlehelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
        
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio 
    </div>
</div>

<div class="mb-3">
    <label for="anioIni" class="form-label">Año de inicio</label>
    <input type="year" name="anioIni" id="anioIni" class="form-control" value="{{isset($certficate->anioIni)?$certficate->anioIni:old('anioIni')}} "aria-describedby="anioInihelp" required >
    @error('anioIni')
        <small id="anioInihelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
       
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio
    </div>
</div>

<div class="mb-3">
    <label for="anioFin" class="form-label">Año de finalización</label>
    <input type="year" name="anioFin" id="anioFin" class="form-control" value="{{isset($certficate->anioFin)?$certficate->anioFin:old('anioFin')}} "aria-describedby="anioFinhelp" required >
    @error('anioFin')
        <small id="anioFinhelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
       
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio
    </div>
</div>

div class="mb-3">
    <label for="companyName" class="form-label">Nombre de la compañia</label>
    <input type="text" name="companyName" id="companyName" class="form-control" value="{{isset($certficate->companyName)?$certficate->companyName:old('companyName')}}"aria-describedby="companyNamehelp" required >

    @error('companyName')
        <small id="companyNamehelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
        
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio 
    </div>
</div>


<div class="mb-3">
    <label for="doc" class="form-label">Cargar certificado</label>
    <input type="file" name="doc" id="doc" class="form-control" value="{{isset($profesional->doc)?$profesional->doc:old('doc')}}"aria-describedby="dochelp" required pdf,docx,doc>
    @error('doc')
        <small id="dochelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    
</div> 


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <input type="submit" value="Guardar" class="btn btn-primary">
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>