<?php
    //* declaracion de variables 
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $serie = $_POST['serie'];
    $descripcion = $_POST['descripcion'];
    $capacidad = $_POST['capacidad'];
    $precio = $_POST['precio'];
    $nombreArchivo = $_FILES['miArchivo']['name'];
    $rutaTemporal = $_FILES['miArchivo']['tmp_name'];
    $rutaServidor = "../raw/archivo/";
    //* llamado de la conexion
    require_once 'conexion.php';
    $conexion = conexion(); 
    //*declaaracion del SQL
    $sql = "INSERT INTO t_componentes (nombre,modelo,serie,descripcion,capacidad,precio,nombreArchivo) VALUES ('$nombre','$modelo','$serie','$descripcion','$capacidad','$precio','$nombreArchivo')";
    $resultado = mysqli_query($conexion,$sql);

    if(move_uploaded_file($rutaTemporal, $rutaServidor . $nombreArchivo)){
        header("location:../index.php");
    }else{
        echo  "no se pudo subir archivo";
    }
?>