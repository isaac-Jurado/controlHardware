<?php
    session_start();
    require_once 'conexion.php';
    $conexion = conexion();
    $idComponente = $_POST['idComponente'];

    $sql = "SELECT nombreArchivo FROM t_componentes WHERE id_componente = '$idComponente'";
    $respuesta = mysqli_query($conexion,$sql);
    $nombreArchivo = mysqli_fetch_row($respuesta)[0];

    

    $rutaDeArchivo = "../raw/archivo/" . $nombreArchivo;

    $sql = "DELETE FROM t_componentes WHERE id_componente='$idComponente'";
    $respuesta= mysqli_query($conexion,$sql);

    if($respuesta){
        //
        if (unlink($rutaDeArchivo)) {
            $_SESSION['operacion'] = "delete";
        }else{
            $_SESSION['operacion'] = "error2";
        }
    }else{
        echo "no se puedo eliminar";
    }
    
    
    header("location:../index.php");
?>