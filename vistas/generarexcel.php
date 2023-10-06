<?php
    header("content-type: application/xls");
    header("Content-disposition: attachment; filename = Registro_alum.xls");  
?>
<?php
  include_once "../config/conexion.php";
  $sentencia = $bd->query("select * from registro_alum");
  $registro_alum = $sentencia->fetchAll(PDO::FETCH_OBJ);
  //print_r($registro_alum);
  ?>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lista de alumnos registrados
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