<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["matri"]) || 
        empty($_POST["full-name"]) || empty($_POST["Username"])|| 
        empty($_POST["Pass"])
        ){
        header('Location: ./registroadmin.php?mensaje=falta');
        exit();
    }

    include_once '../config/conexion-asistencias.php';
    $matricula = $_POST["matri"];
    $nombre = $_POST["full-name"];
    $correo = $_POST["Username"];
    $pass = $_POST["Pass"];
   

    $sentencia = $bd->prepare("INSERT INTO registro_admin
    (matri,full_name,Username,Pass) 
    VALUES (?,?,?,?);");
    $resultado = $sentencia->execute([$matricula,$nombre,$correo,$pass]);

    if ($resultado === TRUE) {
        header('Location: ./registroadmin.php?mensaje=registrado');
    } else {
        header('Location: ./registroadmin.php?mensaje=error');
        exit();
    }
    
?>
