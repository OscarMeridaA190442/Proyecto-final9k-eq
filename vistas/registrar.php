<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["enrollment"]) ||
       empty($_POST["full-name"]) || empty($_POST["semesters"]) ||
       empty($_POST["group"]) || empty($_POST["fechaa"]) || 
       empty($_POST["entry-time"]) || empty($_POST["exit-time"]) ||
       empty($_POST["activity"])){
        header('Location: asistenciaalum.php?mensaje=falta');
        exit();
    }
    include_once '../config/conexion.php';

    $matricula = $_POST["enrollment"];
    $nombre = $_POST["full-name"];
    $semestre = $_POST["semesters"];
    $grupo = $_POST["group"];
    $fecha = $_POST["fechaa"];
    $hora_entrada = $_POST["entry-time"];
    $hora_salida = $_POST["exit-time"];
    $actividad = $_POST["activity"];

    $sentencia = $bd->prepare("INSERT INTO registro_alum
    (matricula,full_name,semestre,grupo,fecha_regis,hora_entrada,hora_salida,actividad) 
    VALUES (?,?,?,?,?,?,?,?);");
    $resultado = $sentencia->execute([$matricula,$nombre,$semestre,$grupo,$fecha,$hora_entrada,
    $hora_salida,$actividad]);

    if($resultado === TRUE){
        header('location: asistenciaalum.php?mensaje=registrado');
    }else{
        header('Location: asistenciaalum.php?mensaje=error');
        exit();
    }

?>