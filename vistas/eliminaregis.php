<?php
    if(!isset($_GET['id_registro'])){
        header('Location: verdatosregistro.php?mensaje=error');
        exit();
    }
    
    include_once "../config/conexion.php";
    $id_registro = $_GET['id_registro'];

    $sentencia = $bd->prepare("DELETE FROM registro_alum WHERE id_registro = ?;");
    $resultado = $sentencia->execute([$id_registro]);

    if($resultado === TRUE){
        header('Location: verdatosregistro.php?mensaje=eliminado');
    }else{
        header('Location: verdatosregistro.php?mensaje=error');
    }

?>
