{include 'header.tpl'}
{include 'nav.tpl'}

<h1>FORMULARIO INGRESO</h1>
<form>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="usuario" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <button type="submit" class="btn btn-outline-success">Ingresar</button>
</form>
<a href="registrarse" class="btn btn-outline-success">Registrarse</a>
{include 'footer.tpl'}