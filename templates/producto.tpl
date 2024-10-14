{include 'header.tpl'}
{include 'nav.tpl'}


<div>
<div class="card" style="width: 18rem;">
<img src="{$producto->imagen}" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">{$producto->nombre}</h5>
  <p class="card-text">$ {$producto->precio}</p>
</div>
<ul class="list-group list-group-flush">
  <li class="list-group-item">{$producto->descripcion}</li>
  <li class="list-group-item">{$producto->id_material}</li>
  {$logueado}
  {if $logueado}

  <div class="btn-group">
    <a href="eliminarProducto/{$producto->id_producto}" class="btn btn-success">eliminar</a>
    <a href="modificarProducto/{$producto->id_producto}" class="btn btn-success">modificar</a>

  </div>
  {/if}
</ul>
</div>
</div>

{include 'footer.tpl'}
