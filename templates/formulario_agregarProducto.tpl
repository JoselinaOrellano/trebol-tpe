{include 'header.tpl'}
{include 'nav.tpl'}

<div class=".container-sm	">
  <h1>AGREGAR PRODUCTO</h1>
  <form class="row g-3" method="POST" action="cargarProducto">
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input name="nombreProducto" type="text" class="form-control" >
    </div>
  
    <div class="col-md-6">
      <label for="inputPrecio" class="form-label">Precio $ </label>
      <input name="precioProducto" type="number"  class=""  >
    </div>
  
    <div class="col-12">
      <label for="inputDescripcion" class="form-label">Descripcion</label>
      <textarea name="descripcionProducto" type="text" class="form-control" ></textarea>
    </div>
  
    <div class="mb-3">
      <label for="formFile" class="form-label">Imagen</label>
      <input name="imagenProducto" class="form-control col-12" type="file">
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault04" class="textoform">Material</label>
        <select class="custom-select" name= 'materialProducto' required>
          {foreach $materiales item=material }
            <option value="{$material->id_material}" name="materialProducto"> {$material->material} 
          {/foreach}
          </option>
        </select>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-success ">Agregar</button>
    </div>
</form>

</div>
{include 'footer.tpl'}