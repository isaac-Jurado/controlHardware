<?php
    $idComponente = $_POST['idComponente'];
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $descripcion = $_POST['descripcion'];
    $capacidad = $_POST['capacidad'];
    $precio = $_POST['precio'];
    $nombreArchivoR = $_FILES['miArchivo']['name'];
    $rutaTemporal = $_FILES['miArchivo']['tmp_name'];
    $rutaServidor = "../raw/archivo/";
    

    require_once 'conexion.php';
    $conexion=conexion();



    $sql = "UPDATE t_componentes SET 
                                nombre='$nombre',
                                modelo= '$modelo',
                                serie= '$serie',
                                descripcion= '$descripcion',
                                capacidad= '$capacidad',
                                precio = '$precio'
            WHERE id_componente = '$idComponente' ";
    $resultado = mysqli_query($conexion,$sql);

    //*comprobamos que traigo info el post
    echo $nombreArchivoR . '  esto lo trae el post';
    $sql = "SELECT nombreArchivo FROM t_componentes WHERE id_componente = '$idComponente'";
    $respuesta = mysqli_query($conexion,$sql);
    $nombreArchivo = mysqli_fetch_row($respuesta)[0];
    $rutaDeArchivo = "../raw/archivo/" . $nombreArchivo;
    echo '<br>';
    echo $rutaDeArchivo;
    if ($resultado) {
        if($nombreArchivoR != $nombreArchivo){
            //*comprobamos que entramos al segundo if
            echo '<br>' . 'segundo if';

            if(unlink($rutaDeArchivo)){
                $nombreArchivo = $_FILES['miArchivo']['name'];
                $rutaTemporal = $_FILES['miArchivo']['tmp_name'];
                $rutaServidor = "../raw/archivo/";
                if(move_uploaded_file($rutaTemporal, $rutaServidor . $nombreArchivo)){
                    $sql = "UPDATE t_componentes SET nombreArchivo='$nombreArchivoR' WHERE id_componente = '$idComponente' ";
                    $resultado = mysqli_query($conexion,$sql);
                    //header("location:../index.php");
                }else{
                    echo  "no se pudo subir archivo";
                }
            }else{
                echo 'no se pudo eliminar de archivo';
            }
        }else{
            echo '  vino vacio o es el mismo nombre';
        }
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }

?>