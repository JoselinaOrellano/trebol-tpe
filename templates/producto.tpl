{include 'header.tpl'}
{include 'nav.tpl'}


<div class="mx-auto jumbotron text-center  ">
  <div class="card" style="width: 18rem;">
    <img src="{$producto->imagen}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{$producto->nombre}</h5>
      <p class="card-text">$ {$producto->precio}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{$producto->descripcion}</li>
      <li class="list-group-item">{$producto->id_material}</li>
      <div class="btn-group">
        <a href="eliminarProducto/{$producto->id_producto}" class="btn btn-success">Eliminar</a>
        <a href="modificarProducto/{$producto->id_producto}" class="btn btn-success">Modificar</a>

      </div>
    </ul>
  </div>
</div>

{include 'footer.tpl'}
