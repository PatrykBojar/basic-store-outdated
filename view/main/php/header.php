<nav class="navbar navbar-light bg-dark justify-content-between col-12">
  <a class="navbar-brand text-success display-4" href="#"><img src="view/main/img/main-logo.png" id="main-logo" alt="Dragón verde">Green Dragon</a>
  <form class="form-inline" action="index.php?controller=productos&action=buscador" method="post">
    <input id="name" name="name" class="form-control mr-sm-2 font-weight-bold" type="search" size="35" placeholder="Buscar" aria-label="Buscar">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>

    <?php echo "Bienvenido, " . $_SESSION['user'];?>
</nav>
