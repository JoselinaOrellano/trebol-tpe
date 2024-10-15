{include 'header.tpl'}
{include 'nav.tpl'}

<div class=".container-sm	">
    <h1>MODIFICAR MATERIALES</h1>
    <form class="row g-3" method="POST" action="confirmarCambios/{$material->id_material}">
        <div class="col-md-6">
            <label for="inputNombre" class="form-label">Material</label>
            <input name="nombreMaterial" type="text" class="form-control" value="{$material->material}" >
        </div>
  
        <div class="col-md-6">
            <label for="inputProveedor" class="form-label">Proveedor </label>
            <input name="proveedor" type="text"  class="form-control"  value="{$material->proveedor}" >
        </div>
          
        <div class="col-12">
            <button type="submit" class="btn btn-success ">Guardar cambios</button>
        </div>
    </form>

</div>


{include 'footer.tpl'}