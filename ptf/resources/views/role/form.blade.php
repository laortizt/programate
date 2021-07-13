
<div class="mb-3">
    <label for="name" class="form-label">Nombre rol</label>
    <input type="text" name="name" id="name" class="form-control" value="{{isset($role->name)?$role->name:old('name')}}"aria-describedby="help" required  >

    @error('name')
        <small id="name" class="form-text text-muted">
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