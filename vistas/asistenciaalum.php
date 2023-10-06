<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="../src/img/crear01.svg" />
    <link rel="stylesheet" href="../src/css/estiloo.css">
    <script src="../src/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">

    <title>Registro de asistencia</title>
</head>
<header style="background-color: #D2A92D; color: #18386B; font-size: 20px; height: 80px; margin:1px; padding: 10px">
    <h5>FACULTAD DE CONTADURÍA Y <br> ADMNISTRACIÓN C - I<br> </h5>
</header>

<style>
    /* Estilo para las columnas */
    .column {
        float: left;
        width: 50%;
    }

    /* Estilo para limpiar el flotador después de las columnas */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
</style>
    <!-- inicio de alerta -->
        <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){  
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> Llena todos los campos.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        }
        ?>

        <?php
            if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){  
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registrado!</strong> Asistencia enviada.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        }
        ?>
    <!-- fin de alerta -->

<body>
    <div id="formulario">
        <h4>Laboratorio de computo - Asistencia</h4>
        <form method="POST" action="registrar.php">
            <div class="row">
                <div class="column">
                    <input type="hidden" name="oculto" value="1">
                    <label for="matricula">Matricula</label>
                    <input type="text" id="enrollment" name="enrollment" placeholder="A190444" autofocus required>
                </div>
                <div class="column">
                    <label for="full-name">Nombre completo</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Oscar Eduardo Merida Garcia" autofocus required>
                </div>
                <div class="column">
                    <label for="semestre">Semestre</label>
                    <input type="text" id="semesters" name="semesters" placeholder="9" autofocus required>
                </div>
                <div class="column">
                    <label for="grupo">Grupo</label>
                    <input type="text" id="group" name="group" placeholder="K" autofocus required>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fechaa" autofocus required>
                </div>
                <div class="column">
                    <label for="hora-de-entrada">Hora de entrada</label>
                    <input type="time" id="entry-time" name="entry-time" autofocus required>
                </div>
                <div class="column">
                    <label for="hora-de-salida">Hora de salida</label>
                    <input type="time" id="exit-time" name="exit-time" autofocus required>
                </div>
                <div class="column">
                    <label for="Actividad">Actividad</label>
                    <input type="text" id="activity" name="activity" placeholder="Clase, examen, etc..." autofocus required>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <input type="submit" value="Enviar">
            </div>
        </form>
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