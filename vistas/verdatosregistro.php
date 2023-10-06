<?php
include_once "../config/conexion.php";
$sentencia = $bd->query("select * from registro_alum");
$registro_alum = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($registro_alum);
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../src/img/asistencia.svg" />
    <link rel="stylesheet" href="../src/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <!-- CDN ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <title>Datos de asistencia</title>
</head>
<header style="background-color: #D2A92D; color: #18386B; font-size: 20px; height: 80px; margin:1px; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
    <h5>FACULTAD DE CONTADURÍA Y <br> ADMNISTRACIÓN C - I<br> </h5>
    <a href="../menuprincipal.php" type="button" class="btn btn-primary">Menú</a>
</header>
    <!-- Alertas -->
    <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'error') {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Correcto!</strong> Datos modificados correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>

    <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Borrado!</strong> Datos eliminados correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>
    <!-- Fin de las alertas -->

<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-header">
                        Lista de alumnos registrados
                        <a href="generarexcel.php" type="button" class="btn btn-success float-end">Excel</a>
                    </div>
                    <div class="p-5">
                        <div class="table-responsive lg">
                            <table class="table table-lg align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Matricula</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Semestre</th>
                                        <th scope="col">Grupo</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Hora<br>entrada</th>
                                        <th scope="col">Hora<br>salida</th>
                                        <th scope="col">Actividad</th>
                                        <th scope="col" colspan="2">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($registro_alum as $dato) {


                                    ?>

                                        <tr>
                                            <td scope="row"><?php echo $dato->id_registro; ?></td>
                                            <td><?php echo $dato->matricula; ?></td>
                                            <td><?php echo $dato->full_name; ?></td>
                                            <td><?php echo $dato->semestre; ?></td>
                                            <td><?php echo $dato->grupo; ?></td>
                                            <td><?php echo $dato->fecha_regis; ?></td>
                                            <td><?php echo $dato->hora_entrada; ?></td>
                                            <td><?php echo $dato->hora_salida; ?></td>
                                            <td><?php echo $dato->actividad; ?></td>
                                            <td><a class="text-primary" href="editar.php?id_registro=<?php echo $dato->id_registro; ?>">
                                            <i class="bi bi-pencil-square"></i></a></td>
                                            <td><a onclick="return confirm('¿Estas seguro?, los datos se borraran por completo.')" class="text-danger" href="eliminaregis.php?id_registro=<?php echo $dato->id_registro; ?>">
                                            <i class="bi bi-trash"></i></a></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</body>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<footer id="sticky-footer" class="bg-dark text-white py-2">
    <div class="container text-center">
        <small>&copy; 2023 UNACH FCA C-I</small>
    </div>
</footer>

</html>