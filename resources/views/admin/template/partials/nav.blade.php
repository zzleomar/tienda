<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">SIOCA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  @if(Auth::user()->type == "admin")
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('users.index') }}">USUARIOS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('categorias.index') }}">CATEGORIAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('articulos.index') }}">ARTICULOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">IMAGENES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('tags.index') }}">TAGS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                OPCIONES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('users.index') }}">USUARIO</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('categorias.index') }}">CATEGORIA</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('articulos.index') }}">ARTICULO</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">IMAGENES</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('tags.index') }}">TAGS</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
         </ul>

         @else

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">USUARIOS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CATEGORIAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ARTICULOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">IMAGENES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TAGS</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                OPCIONES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">USUARIO</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">CATEGORIA</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">ARTICULO</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">IMAGENES</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">TAGS</a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
         </ul>

    @endif
    
    <ul  class="nav navbar-nav navbar-right">
      
          <li class="dropdown">
                        <a href="#" class=" btn btn-info dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                         </a>

                          <ul class="dropdown-menu">
                                <li>
                                    <a  class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                      </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                          </ul>
                  </li>
        </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>