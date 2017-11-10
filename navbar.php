    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" id="navBrand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" id="navHome" href="index.php">Home</a>
          <a class="nav-item nav-link" id="navProd" href="prodman.php">Lista de Produtos</a>
          <a class="nav-item nav-link" id="navTab" href="tabman.php">Mesas e Comandas</a>
          <a class="nav-item nav-link" id="navOrder" href="orderman.php">Status de Pedidos</a>
        </div>
      </div>
    </nav>
    <?php
    echo $response;
    ?>