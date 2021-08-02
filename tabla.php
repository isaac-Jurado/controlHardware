<?php
include "servidor/conexion.php";
$conexion = conexion();
$sql = "SELECT * FROM t_componentes";
$resultado = mysqli_query($conexion, $sql);
?>


<table id="example" class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>NOMBRE DEL COMPONENTE</th>
            <th>MODELO</th>
            <th>N° DE SERIE</th>
            <th>DESCRIPCION</th>
            <th>CAPACIDAD</th>
            <th>PRECIO</th>
            <th>IMAGEN</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>

        </tr>
    </thead>

    <tbody>
        <?php
        while ($ver = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td class="text-center"> <?php echo $ver['id_componente']; ?> </td>
            <td><?PHP echo $ver['nombre'] ?></td>
            <td><?PHP echo $ver['modelo'] ?></td>
            <td><?PHP echo $ver['serie'] ?></td>
            <td><?PHP echo $ver['descripcion'] ?></td>
            <td><?PHP echo $ver['capacidad'] . "GB" ?></td>
            <td><?PHP echo "$" . $ver['precio'] ?></td>
            <td>
                <?php $nombre = $ver['nombreArchivo'];
                $cadenaImagen = '';
                $cadenaImagen = '<img src=' . './raw/archivo/' . $ver['nombreArchivo'] . ' width="50px" height="50px">';
                echo $cadenaImagen; ?>
            </td>
            <td>
                <form action="actualizar.php" method="POST">
                    <input type="text" hidden name="idComponente" value="<?php echo $ver['id_componente'] ?>">
                    <button class="btn btn-warning">Editar</button>
                </form>
            </td>
            <td>
                <form action="servidor/eliminar.php" method="POST">
                    <input type="text" hidden name="idComponente" value="<?php echo $ver['id_componente'] ?>">
                    <button class="btn btn-danger">ELIMINAR</button>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>

    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>