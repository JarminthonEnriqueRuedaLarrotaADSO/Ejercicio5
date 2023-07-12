<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cuarto pubnto</title>
</head>

<body>

    <section class="container">
        <div class="row justify-content">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>Fomulario hombre y mujer</h1>
                        <div class="card-header">
                            <form action="controlador.php" method="post">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre"><br><br>
                                <label for="genero">Género:</label> <br><br>
                                <label for="hombre" class="form-check-label">hombre
                                    <input class="form-check-input" type="radio" name="genero" id="hombre"
                                        value="hombre">
                                </label> <br> <br>
                                <label for="mujer" class="form-check-label"> mujer
                                    <input class="form-check-input" type="radio" name="genero" id="mujer" value="mujer">
                                </label>
                                </select><br><br>
                                <input type="submit" value="Enviar" name="enviar">
                            </form>
                        </div>
                    </div>
                    <section class="container">

                        <!-- tabla -->
                        <table class="table">
                            <br>
                            <thead>
                                <h2>Cantidad de hombres inscritos</h2>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">genero</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Importamos la carpeta controlador.php para usar el contenido
                                include_once 'operaciones.php';
                                $clase = new clase();
                                $contadorHombre;
                                //Validamos que exista la sesion para imprimirla
                                session_start();
                               //ESTE IF SE UTILIZA PARA HACER LA VALIDACIOM Y QUE NO SALGAN COSITAS NARANJAS AL INICIAR EL CODIGO!
                                // if (isset($_SESSION['hombre']) && isset($_SESSION['mujer'])) {
                                    
                                // }
                                foreach ($_SESSION['hombre'] as $key) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $key['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $key['genero']; ?>
                                        </td>
                                    <?php } ?>

                                    <td>

                                    </td>

                                    </td>
                                <tr>

                            </tbody>
                        </table>
                        <div>
                            <?php echo 'La cantidad de hombres es de: ' .  count($_SESSION['hombre']) ?>
                        </div>
                        <table class="table">
                            <br>
                            <thead>
                                <h2>Cantidad de mujeres inscritas</h2>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">genero</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Importamos la carpeta controlador.php para usar el contenido
                                include_once 'operaciones.php';
                                $clase = new clase();
                                $contadorHombre;
                                //Validamos que exista la sesion para imprimirla
                                //recorremos la array para mostrar los items
                                foreach ($_SESSION['mujer'] as $key) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $key['nombre']; ?>
                                        </td>
                                        <td>
                                            <?php echo $key['genero']; ?>
                                        </td>
                                    <?php } ?>
                                    <td>
                                <tr>
                            </tbody>
                        </table>
                        <div>
                            <?php echo 'La cantidad de mujeres es de: ' . count($_SESSION['mujer']) ?>
                        </div>
                        <div>
                            <?php  
                                    echo $clase->mostrar();
                            ?>
                        </div> 
                </div>

            </div>

        </div>

        </div>
        </div>
        </div>
</body>

</html>