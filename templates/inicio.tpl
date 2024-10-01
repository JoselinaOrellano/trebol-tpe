{include 'header.tpl'}
{include 'nav.tpl'}
{include 'footer.tpl'}

<section class="jumbotron text-center fondo ">
    <div >
      <h1>Trebol Muebleria</h1>
      <p class="lead ">Estilo y comodidad</p>   
      
    </div>
  </section>

 <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        {foreach from=$productos item=$producto}
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="{$producto->imagen}" class="card-img-top" alt="..." width="100%" height="225">
              <div class="card-body">
                <h4>${$producto->precio}</h4>
                <h5>{$producto->nombre}</h5>
                <p class="card-text">{$producto->id_material}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="ciudad/{$producto->id_producto}" class="btn btn-success">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
  </div>
