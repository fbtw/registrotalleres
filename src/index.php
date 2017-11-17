<?php
include ('conectar.php');
$db->set_charset("utf8");
$query = "SELECT * FROM asistente;";
$result= $db->query($query);




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>
        Registro de talleres
    </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex, noarchive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- estilos externos CSS, fuente: https://www.w3schools.com/bootstrap/-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id="public">
<div id="header" class="jumbotron text-center">
    <h2 class="">Registro de talleres</h2>
    <div class="">Formulario de registro</div>
</div>
<div id="container" class="container">
    <div class="col-sm-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Formulario con estilo</h3>
        </div>
        <form id="formulario" name="formulario" class="panel-body" accept-charset="UTF-8" autocomplete="off"
              enctype="multipart/form-data" method="post" novalidate="" action="enviar.php">

                    <ul class="list-group">
                        <li id="nombre-apellido" class="list-group-item">
                            <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" name="f1" class="form-control" value="" size="15" tabindex="1" onkeyup="handleInput(this);"
                                       onchange="handleInput(this);" placeholder="ej: Maria" required="" type="text">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input id="apellidos" name="f2" class="form-control" value="" size="15" tabindex="2" onkeyup="handleInput(this);"
                                       onchange="handleInput(this);" placeholder="ej: Zambrano Sánchez" required="" type="text">
                            </div>
                            </div>
                            </div>
                        </li>


                        <li id="direcciones" class="list-group-item">
                            <div class="row">
                                <div class="col-sm-6">
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input id="correo" name="f3" class="form-control" value="" size="15" tabindex="3" onkeyup="handleInput(this);"
                                       onchange="handleInput(this);" placeholder="asd@mimail.com" required="" type="email">
                            </div>
                                </div>
                                <div class="col-sm-6">
                            <div class="form-group">
                                <label for="dirección">Dirección</label>
                                <input id="dirección" name="f4" class="form-control" value="" size="15" tabindex="4" onkeyup="handleInput(this);"
                                       onchange="handleInput(this);" placeholder="10 de agosto y la que cruza" required="" type="text">
                            </div>
                                </div>
                            </div>
                        </li>


                        <li id="cedulas" class="list-group-item">
                            <div class="row">
                                <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nacionalidad">Nacionalidad</label>
                                <input id="nacionalidad" name="f5" class="form-control" value="" tabindex="5" onkeyup="handleInput(this);"
                                       onchange="handleInput(this);" placeholder="ej: curazaleño" required="" type="text">
                            </div>
                                </div>
                                <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input id="cedula" name="f6" class="form-control" value="" tabindex="6" onkeyup="handleInput(this);"
                                       onchange="handleInput(this);" placeholder="012345678-9" required="" type="text">
                            </div>
                                </div>
                            </div>
                        </li>

                        <li id="talleres" class="list-group-item">
                            <div class="row">
                                <div class="col-sm-6">
                            <div class="form-group">
                                <label for="selec01" >Seleccione talleres (Ctrl / Cmd⌘)</label>
                                <select id="selec01" name="f7" class="form-control" multiple> <!--tabindex="7" onclick="handleInput(this);"
									onkeyup="handleInput(this);" -->
                                    <option value="Ceramica" >
                                        Cerámica
                                    </option>
                                    <option value="Cocina">
                                        Cocina
                                    </option>
                                    <option value="Orfebreria">
                                        Orfebrería
                                    </option>
                                    <option value="Agricultura">
                                        Agricultura
                                    </option>
                                    <option value="Percepción">
                                        Percepción Extrasensorial
                                    </option>
                                </select>
                            </div>
                                </div>
                                    <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="selec02">Seleccione un curso:</label>
                                    <select id="selec02" name="f8" class="form-control" tabindex="8" onclick="handleInput(this);"
                                            onkeyup="handleInput(this);" >
                                        <option value="Frances" selected="selected">
                                            Francés
                                        </option>
                                        <option value="Primeros A.">
                                            Primeros Auxilios
                                        </option>
                                        <option value="Finanzas">
                                            Finanzas
                                        </option>
                                        <option value="Vexilologia">
                                            Vexilología militar
                                        </option>
                                        <option value="Criptografia">
                                            Criptografía cuántica
                                        </option>
                                    </select>
                                </div>
                            </div>
                                </div>
                            </li>

                    </ul>

            <p>
                <button id="saveForm" name="mandar" class="btn btn-lg btn-success" onmousedown="doSubmitEvents();" type="submit">Enviar</button>
            </p>
        </form>

    </div><!-- panel-->

    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Dirección</th>
            <th>Nacionalidad</th>
            <th>Cédula</th>
            <th>talleres</th>
            <th>curso</th>
        </tr>
        </thead>
        <tbody>

        <?php

        while($f = $result->fetch_object()){

            echo '<tr>
            <td>'.$f->Nombre.'</td>
            <td>'.$f->Apellido.'</td>
            <td>'.$f->Correo.'</td>
            <td>'.$f->Direccion.'</td>
            <td>'.$f->Nacionalidad.'</td>
            <td>'.$f->Cedula.'</td>
            <td>'.$f->Talleres.'</td>
            <td>'.$f->Curso.'</td>
        </tr>';

        }
        ?>

        </tbody>
    </table>
    </div>
</div><!-- container-->



<!-- JavaScript -->

<script>
    __RULES = [];
    __ENTRY = [];
    __PRICES = null;
    __FORM_LIMIT = 20;
</script>
</body>
</html>

<?php
//header( 'Location: /index.html' ) ;

?>
