{include 'header.tpl'}
{include 'nav.tpl'}

<h1>FORMULARIO REGISTRACION</h1>
<form>
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3"required>
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3"required>
        </div>
    </div>
    
    <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3"required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3"required>
        </div>
    </div>

  <button type="submit" class="btn btn-outline-success">Registrarse</button>
</form>
{include 'footer.tpl'}