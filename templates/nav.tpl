    {include 'header.tpl'}    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  <img src="../img/logo.jpg" alt="Logo" width="50" height="50">
                </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Materiales
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Pino</a></li>
                  <li><a class="dropdown-item" href="#">Melamina</a></li>
                  <li><a class="dropdown-item" href="#">Algarrobo</a></li>
                  <li><a class="dropdown-item" href="#">Chenille</a></li>                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-disabled="true">Contacto</a>
              </li>
            </ul>
            <button class="btn btn-outline-success" type="button">Ingresar</button>
          </div>
        </div>
      </nav>