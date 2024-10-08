{include 'header.tpl'}
{include 'nav.tpl'}

<div class=".container-sm	">
  <h1>MODIFICAR PRODUCTO</h1>
  <form class="row g-3">
    <div class="col-md-6">
      <label for="inputNombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" value="{$producto->nombre}" id="nombre">
    </div>
  
    <div class="col-md-6">
      <label for="inputPrecio" class="form-label">Precio $ </label>
      <input type="number"  class=""  value="{$producto->precio}" id="precio">
    </div>
  
    <div class="col-12">
      <label for="inputDescripcion" class="form-label">Descripcion</label>
      <textarea type="text" class="form-control" value="{$producto->descripcion}" id="descripcion" ></textarea>
    </div>
  
    <div class="mb-3">
      <label for="formFile" class="form-label">Imagen</label>
      <input class="form-control col-12" type="file" id="imagen" value="{$producto->imagen}">
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault04" class="textoform">Material</label>
        <select class="custom-select" name= 'material' required>
        <option selected disabled value="{$producto->id_material}" >{$producto->id_material}</option>
          {foreach $materiales item=material }
            <option value="{$material->id_material}"> {$material->material} </option>
          {/foreach}
        </select>
    </div>
 
    <div class="col-12">
      <button type="submit" class="btn btn-success">modificar</button>
    </div>
</form>

</div>
{include 'footer.tpl'}