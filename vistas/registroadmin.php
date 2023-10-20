<?php
session_start();
if ($_SESSION == null || $_SESSION = '') {
    header("Location: ../login.php");
    echo '<div style="position: absolute" class="alert alert-danger justify-content-center">NO TIENES ACCESO A LA PÁGINA</div>';
    die();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="../src/img/asistencia.svg" />
    <link rel="stylesheet" href="../src/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <title>Nuevo usuario</title>
</head>
<header style="background-color: #D2A92D; color: #18386B; font-size: 20px; height: 80px; margin:1px; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
    <h5>FACULTAD DE CONTADURÍA Y <br> ADMNISTRACIÓN C - I<br> </h5>
    <a href="../menuprincipal.php" type="button" class="btn btn-primary">Menú</a>
</header>
        <!-- Alerta -->
        <?php
        if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado') {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Correcto!</strong> Datos modificados correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        }
        ?>
        <!-- Alerta -->
    <br>

    <body>
        <div containter class="fluid">
            <div id="formulario">
                <h4>Datos del nuevo usuario</h4>
                <form method="POST" action="registroad.php">

                    <input type="hidden" name="oculto" value="1">

                    <label for="matricula">Matricula</label>
                    <input type="text" id="matri" name="matri" placeholder="A19043" autofocus required>

                    <label for="full-name">Nombre completo</label>
                    <input type="text" id="full-name" name="full-name" placeholder="Rigoberto Perez" autofocus required>

                    <label for="semestre">Correo</label>
                    <input type="text" id="correo" name="Username" placeholder="@unach.mx" autofocus required>

                    <label for="grupo">Contraseña</label>
                    <input type="password" id="pass" name="Pass" placeholder="*****" autofocus required>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <input type="submit" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </body>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <br>
    <footer id="sticky-footer" class="bg-dark text-white py-2">
        <div class="container text-center">
            <small>&copy; 2023 UNACH FCA C-I</small>
        </div>
    </footer>

</html>