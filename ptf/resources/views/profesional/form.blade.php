

<div class="mb-3">
    <label for="yearsExperience" class="form-label">Años de experiencia</label>
    <input type="int" name="yearsExperience" id="yearsExperience" class="form-control" value="{{isset($profesional->yearsExperience)?$profesional->yearsExperience:old('yearsExperience')}} "aria-describedby="yearsExperiencehelp" required >
    @error('anioPublicacion')
        <small id="yearsExperiencehelp" class="form-text text-muted">
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
    <label for="aboutMe" class="form-label">Sobre mi</label>
    <input type="textbox" name="aboutMe" id="aboutMe" class="form-control" value="{{isset($profesional->aboutMe)?$profesional->aboutMe:old('aboutMe')}}"aria-describedby="aboutMehelp" required >

    @error('nombre')
        <small id="aboutMehelp" class="form-text text-muted">
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
    <label for="iduserFK" class="form-label">Seleccione el profesional</label>
    
    <select class="form-select" aria-label="Default select example" name='iduserFK' id="iduserFK"
        value = "{{isset($iduserFK->iduserFK)? $profesional->iduserFK : old('iduserFK')}}"
        aria-describedby="iduserFKhelp"  required>
        <option selected>Selecione una opción</option>

        @foreach($profesionals as $a)
            <option value="{{$a->id}}">{{$a->nombre}} {{$a->apellido}}</option>
        @endforeach
    </select>


    @error('iduserFK')
        <small id="iduserFKhelp" class="form-text text-muted">
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
    <label for="photo" class="form-label">Ingrese una foto</label>
    <input type="file" name="photo" id="photo" class="form-control" value="{{isset($profesional->photo)?$profesional->photo:old('photo')}}"aria-describedby="photohelp" required mimes:jpg,jpeg,png>
    @error('foto')
        <small id="photohelp" class="form-text text-muted">
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