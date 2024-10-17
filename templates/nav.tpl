    {include 'header.tpl'}    

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="Logo" width="50" height="50">
          </a>
          {if ($logueado)}       
            <button class="btn btn-outline-success"><a href="logout">Cerrar sesión</a></button>          
          {else}
          <button class="btn btn-outline-success"><a href="ingresar">Ingresar</a></button>  
          {/if}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Materiales
                </a>
                <ul class="dropdown-menu">
                  <li>
                    {foreach from=$materiales item=$material}
                      <a name="categoria" class="dropdown-item" href="mostrarCategoria/{$material->id_material}" value="{$material->id_material}">{$material->material}</a>
                    {/foreach}
                  </li>
                </ul>
              </li>
              {if ($logueado)}
                <li class="nav-item">
                  <a class="nav-link" aria-disabled="true" href="agregarProducto">Agregar producto</a>
                </li>
                <li>
                  <a class="nav-link" aria-disabled="true" href="modificarMateriales">Modificar materiales</a>
                </li>       
              {/if}
              <li class="nav-item">
                <a class="nav-link" aria-disabled="true" href="contacto">Contacto</a>
              </li>
              
              
          </div>
          
        </div>
      </nav>