<?php

    $idComponente = $_POST['idComponente'];

    //traemos la conexion
    include "servidor/conexion.php";
    $conexion = conexion();
    //debemos obtener los datos asociados

    $sql = "SELECT * FROM t_componentes WHERE id_componente = '$idComponente'";
    $resultado = mysqli_query($conexion, $sql);

    $datos = mysqli_fetch_array($resultado);
?>

<?php
    require_once 'header.php'; 
?>

<div class="container">
    <div class="row">
        <div class="col">
            <!-- //*inicia el fomulario  -->
            <form class="form-group" action="servidor/actualizarComponente.php" enctype="multipart/form-data" method="POST" >
                <div class="container text-center mt-5" >
            <!-- //*primera fila del formulario -->
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="idComponente" value="<?php echo $datos['id_componente'] ?>" hidden>
                            <label for="nombre"> <h4 > NOMBRE DEL COMPONENTE </h4> </label>
                            <input type="text" name="nombre" placeholder="EJE. MEMORIA RAM" class="form-control rounded-pill" required value="<?php echo $datos['nombre'] ?>">
                        </div>

                        <div class="col-sm-6">
                            <label for="modelo"> <h4 > MODELO </h4> </label>
                            <input type="text" name="modelo" placeholder="EJE. 9905043-439.A00LF" class="form-control rounded-pill" required value="<?php echo $datos['modelo'] ?>">
                        </div>

                    </div>
            <!-- //*segunda fila del formulario -->
                    <div class="row mt-4">

                        <div class="col">
                            <label for="serie"><h4>N° DE SERIE</h4></label>
                            <input type="text" name="serie" placeholder="EJ. 201709301030P03M47 " class="form-control rounded-pill" required value="<?php echo $datos['serie'] ?>">
                        </div>

                        <div class="col">
                            <label for="descripcion"><h4>DESCRIPCION</h4></label>
                            <input type="text" name="descripcion" placeholder="COLOCA TODA LA DESCRIPCION NECESARIA" class="form-control rounded-pill" required value="<?php echo $datos['descripcion'] ?>">
                        </div>

                    </div>
            <!-- //*tercera fila del formulario  -->
                    <div class="row mt-4">

                        <div class="col">
                            <label for="capacidad"> <h4> CAPACIDAD </h4> </label>
                            <input type="number" name="capacidad" placeholder="CAPACIDAD EN GB " class="form-control rounded-pill" required value="<?php echo $datos['capacidad'] ?>">
                        </div>

                        <div class="col">
                            <label for="precio"> <h4> PRECIO </h4> </label>
                            <input type="number" name="precio" placeholder="EJEM. 102"  required class="form-control rounded-pill" value="<?php echo $datos['precio'] ?>"> 
                        </div>

                    </div>
            <!-- //*cuarta fila del formulario -->
                    <div class="row mt-4">
                        <div class="col">
                            <label for="miArchivo"> <h4> IMAGEN </h4> </label>
                            <input type="file" name="miArchivo"   class="form-control rounded-pill">
                        </div>
                    </div>
            <!-- //* fila del boton -->
                    <div class="row mt-4">
                        <div class="col-3 mx-auto">
                            <button class="btn btn-primary"><h5>GUARDAR</h5></button>
                        </div>
                    </div>

        </form>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php'; 
?>
