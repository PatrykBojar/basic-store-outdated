<nav class="navbar navbar-toggleable-md navbar-light bg-success">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <p>Bienvenido, </p>
  <ul class="nav nav-pills movie-sel-ul text-center">
    <form action="index.php?controller=usuarios&action=show_login_page" method="post">
      <button type="submit" id="btn-identificacion" class="btn btn-outline-dark font-weight-bold">Identificarse</button>
    </form>
    <button type="button" class="btn btn-outline-dark font-weight-bold ml-2">Cesta</button>
  </ul>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <div class="">
        <h3 class="font-weight-bold">Categorías</h3>
        <div class="dropdown-divider text-dark"></div>
      </div>
      <a class="nav-item nav-link" href="#">Componentes</a>
      <a class="nav-item nav-link" href="#">Ordenadores</a>
      <a class="nav-item nav-link" href="#">Periféricos</a>
    </div>
  </div>

</nav>