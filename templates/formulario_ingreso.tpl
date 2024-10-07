{include 'header.tpl'}
{include 'nav.tpl'}

<h1>FORMULARIO INGRESO</h1>
<form href="login" method="POST" action="login">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input name="usuario" type="usuario" class="form-control" id="inputEmail3" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword3" required>
    </div>
  </div>
  <button type="submit" class="btn btn-outline-success">Ingresar</button>
</form>
<p> Todavía no tenes una cuenta?</p>
<a href="registrarse" class="btn btn-outline-success">Registrarse</a>

{include 'footer.tpl'}