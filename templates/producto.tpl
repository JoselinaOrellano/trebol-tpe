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
</ul>
</div>
</div>

{include 'footer.tpl'}
