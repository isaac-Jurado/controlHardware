<?php
    require_once 'header.php'; 
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col">
        <!-- //*inicia el fomulario  -->
        <form class="form-group" action="servidor/agregarComponente.php" enctype="multipart/form-data" method="POST" >
          <div class="container text-center">
            <!-- //*primera fila del formulario -->
            <div class="row">
              <div class="col-sm-6">
                <label for="nombre"> <h4 > NOMBRE DEL COMPONENTE </h4> </label>
                <input type="text" name="nombre" placeholder="EJE. MEMORIA RAM" class="form-control rounded-pill" required>
              </div>

              <div class="col-sm-6">
                <label for="modelo"> <h4 > MODELO </h4> </label>
                <input type="text" name="modelo" placeholder="EJE. 9905043-439.A00LF" class="form-control rounded-pill" required>
              </div>

            </div>
            <!-- //*segunda fila del formulario -->
            <div class="row mt-4">

              <div class="col">
                <label for="serie"><h4>N° DE SERIE</h4></label>
                <input type="text" name="serie" placeholder="EJ. 201709301030P03M47 " class="form-control rounded-pill" required>
              </div>

              <div class="col">
                <label for="descripcion"><h4>DESCRIPCION</h4></label>
                <input type="text" name="descripcion" placeholder="COLOCA TODA LA DESCRIPCION NECESARIA" class="form-control rounded-pill" required>
              </div>

            </div>
            <!-- //*tercera fila del formulario  -->
            <div class="row mt-4">

              <div class="col">
                <label for="capacidad"> <h4> CAPACIDAD </h4> </label>
                <input type="number" name="capacidad" placeholder="CAPACIDAD EN GB " class="form-control rounded-pill" required>
              </div>

              <div class="col">
              <label for="precio"> <h4> PRECIO </h4> </label>
              <input type="number" name="precio" placeholder="EJEM. 102"  required class="form-control rounded-pill">
              </div>
            </div>
            <!-- //*cuarta fila del formulario -->
            <div class="row mt-4">
              <div class="col">
                <label for="miArchivo"> <h4> IMAGEN </h4> </label>
                <input type="file" name="miArchivo"  required class="form-control rounded-pill">
              </div>
            </div>
            <!-- //* fila del boton -->
            <div class="row mt-4">
              <div class="col-3 mx-auto">
                <button class="btn btn-primary"><h5>AGREGAR</h5></button>
              </div>
            </div>

        </form>
      </div>
    </div>
    <!-- //*aca inicia la colocacion de la tabla  -->
    <div class="row mt-5">
      <div class="col">
        <?php
            require_once 'tabla.php'; 
        ?>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<?php
    require_once 'footer.php'; 
?>