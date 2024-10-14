{include 'header.tpl'}
{include 'nav.tpl'}

<div class=".container-sm	">
  <h1>MODIFICAR PRODUCTO</h1>
  <form class="row g-3" method="POST" action="guardarCambios">
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input name="nombreProducto" type="text" class="form-control"  id="nombreProducto">
    </div>
  
    <div class="col-md-6">
      <label for="inputPrecio" class="form-label">Precio $ </label>
      <input name="precioProducto" type="number"  class=""   id="precioProducto">
    </div>
  
    <div class="col-12">
      <label for="inputDescripcion" class="form-label">Descripcion</label>
      <textarea name="descripcionProducto" type="text" class="form-control"  id="descripcionProducto" ></textarea>
    </div>
  
    <div class="mb-3">
      <label for="formFile" class="form-label">Imagen</label>
      <input name="imagenProducto" class="form-control col-12" type="file" id="imagenProducto" >
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault04" class="textoform">Material</label>
        <select class="custom-select" name= 'materialProducto' required>
        <option selected disabled  >{$producto->id_material}</option>
          {foreach $materiales item=material }
            <option value="{$material->id_material}"> {$material->material} </option>
          {/foreach}
        </select>
    </div>
 
    <div class="col-12">
      <a href="guardarCambios/{$producto->id_producto}" class="btn btn-outline-success">Guardar Cambios</a>
    </div>
</form>

</div>
{include 'footer.tpl'}