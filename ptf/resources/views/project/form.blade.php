<div class="mb-3">

    <label for="nameProject" class="form-label">Nombre de proyecto</label>
    <input type="text" name="nameProject" id="nameProject" class="form-control" value="{{isset($project->nameProject)?$project->nameProject:old('nameProject')}}"aria-describedby="nameProjecthelp" required >

    @error('nameProject')
        <small id="nameProjecthelp" class="form-text text-muted">
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
    <input type="year" name="anioIni" id="anioIni" class="form-control" value="{{isset($project->anioIni)?$project->anioIni:old('anioIni')}} "aria-describedby="anioInihelp" required >
    @error('anioIn')
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
    <input type="year" name="anioFin" id="anioFin" class="form-control" value="{{isset($project->anioFin)?$project->anioFin:old('anioFin')}} "aria-describedby="anioFinhelp" required >
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


<div class="mb-3">

    <label for="description" class="form-label">Descripción</label>
    <input type="text" name="description" id="description" class="form-control" value="{{isset($project->description)?$project->description:old('description')}}"aria-describedby="descriptionhelp" required >

    @error('description')
        <small id="descriptionhelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
        <a href=""> </a>
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio 
    </div>
</div>


<div class="mb-3">
    <label for="idprofesionalFK" class="form-label">Seleccione el profesional</label>
    
    <select class="form-select" aria-label="Default select example" name='idprofesionalFK' id="idprofesionalFK"
        value = "{{isset($project->idprofesionalFK)? $project->idprofesionalFK : old('idprofesionalFK')}}"
        aria-describedby="idprofesionalFKhelp"  required>
        <option selected>Selecione una opción</option>

        @foreach($profesionals as $a)
            <option value="{{$a->id}}">{{$a->nombre}} {{$a->apellido}}</option>
        @endforeach
    </select>


    @error('iduserFK')
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
    <label for="idcategoryFK" class="form-label">Seleccione la categoría</label>
    
    <select class="form-select" aria-label="Default select example" name='idprofesionalFK' id="idcategoryFK"
        value = "{{isset($project->idcategoryFK)? $project->idcategoryFK : old('idcategoryFK')}}"
        aria-describedby="idcategoryFKhelp"  required>
        <option selected>Selecione una opción</option>

        @foreach($categories as $a)
            <option value="{{$a->id}}">{{$a->nombre}}</option>
        @endforeach
    </select>

    @error('iduserFK')
        <small id="idcategoryFKhelp" class="form-text text-muted">
            *{{$message}}
        </small>
    @enderror
    <div class="valid-feedback">
       
    </div>
    <div class="invalid-feedback">
       *El campo es obligatorio
    </div>
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