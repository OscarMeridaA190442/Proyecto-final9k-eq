<?php
    print_r($_POST);
    if(!isset($_POST['id_registro'])){
        header('location: verdatosregistro.php?mensaje=error');
        //echo 'Error';
    }

    include_once "../config/conexion.php";

    $id_registro = $_POST['id_registro'];
    $matricula = $_POST['enrollment'];
    $full_name = $_POST['full-name'];
    $semestre = $_POST['semesters'];
    $grupo = $_POST['group'];
    $fecha_regis = $_POST['fechaa'];
    $hora_entrada = $_POST['entry-time'];
    $hora_salida = $_POST['exit-time'];
    $actividad = $_POST['activity'];

    $sentencia = $bd->prepare("UPDATE registro_alum SET matricula = ? , full_name = ?, semestre = ?, 
    grupo = ?, fecha_regis = ?, hora_entrada = ?, hora_salida = ?, actividad = ? 
    WHERE id_registro = ?;");
    $resultado = $sentencia->execute([$matricula,$full_name,$semestre,$grupo,$fecha_regis,
    $hora_entrada,$hora_salida,$actividad,$id_registro]);

    if($resultado === TRUE){
        header('Location: verdatosregistro.php?mensaje=editado');
    }else{
        header('Location: verdatosregistro.php?mensaje=error');
    }

?>