<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="./src/img/home.svg" />
    <link rel="stylesheet" href="./src/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">

    <title>Menu</title>
</head>
    <header style="background-color: #D2A92D; color: #18386B; font-size: 20px; height: 80px; margin:1px; padding: 10px">
        <h5>FACULTAD DE CONTADURÍA Y <br> ADMNISTRACIÓN C - I<br> </h5>
    </header>

    <body>
        <br>
        <section class="wrapper">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="./vistas/agenda.php">
                                        <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="./vistas/agenda.php"> Clases agendadas
                                            </a>
                                        </h4>
                                        <p class="">
                                            Revisa el calendario para ver, agregar o borrar clases agendadas en el centro de computo.
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="./vistas/agenda.php" class="btn btn-link btn-block">
                                            Ver clases agendadas
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="./vistas/verdatosregistro.php">
                                        <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="./vistas/verdatosregistro.php"> Registros de asistencia
                                            </a>
                                        </h4>
                                        <p class="">
                                            Verifica que los alumnos que se han registrado para accesar a los laboratorios.
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="./vistas/verdatosregistro.php" class="btn btn-link btn-block">
                                            Ver asistencias
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="./vistas/registroadmin.php">
                                        <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                                    </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="./vistas/registroadmin.php">Nuevo usuario
                                            </a>
                                        </h4>
                                        <p class="">
                                            Aquí puedes agregar nuevos usuarios a la aplicación llenando un formulario.
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="./vistas/registroadmin.php" class="btn btn-link btn-block">
                                            Agregar nuevo usuario
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <form method="POST" action="./menuprincipal.php">
                <div class="container text-center">
                    <button type="button" class="btn btn-danger" value="Regresar" name="cerrarsesion">Cerrar Sesión</button>
                </div>
            </form>

        </section>
    </body>
    <footer id="sticky-footer" class="bg-dark text-white py-2">
        <div class="container text-center">
            <small>&copy; 2023 UNACH FCA C-I</small>
        </div>
    </footer>

</html>