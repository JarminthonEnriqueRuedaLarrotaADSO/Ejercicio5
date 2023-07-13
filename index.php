<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cuarto punto</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content">
            <div class="col-6 mx-auto mt-2 ">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="card-title text-center text-white">Registro Persona</h1>
                    </div>
                    <div class="card-body">
                        <form action="controlador.php" method="post" id="form">
                            <div class="mb-3 d-flex flex-row">
                                <label for="nombre" class="form-label fs-5 fw-bold me-2">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control ms-4 w-75">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fs-5 fw-bold">Género:</label>
                                <table class="table table-dark table-hover">
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="genero" id="hombre" value="hombre">
                                            <label for="hombre" class="form-check-label">Hombre</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="genero" id="mujer" value="mujer">
                                            <label for="mujer" class="form-check-label">Mujer</label>
                                        </div>                                        
                                    </td>
                                </tr>
                                </table>
                            </div>
                            
                                <div class="col-12 d-flex" >
                                    <input type="submit" value="Enviar" id="enviar" name="enviar" class="btn btn-primary me-2 w-100">
                                    <input type="submit" value="Close" name="Close" class="btn btn-warning w-25 ms-auto">
                                </div>                                
                        </form>
                    </div>
                </div>

                
                <section class="container">                   
                    <table class="table">

                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Género</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once 'operaciones.php';
                            $clase = new clase();
                            session_start();
                            if (isset($_SESSION['hombre'])) {
                                foreach ($_SESSION['hombre'] as $key) {
                                    ?>
                                    <tr>
                                        <td><?php echo $key['nombre']; ?></td>
                                        <td><?php echo $key['genero']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>                  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Género</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['mujer'])) {
                                foreach ($_SESSION['mujer'] as $key) {
                                    ?>
                                    <tr>
                                        <td><?php echo $key['nombre']; ?></td>
                                        <td><?php echo $key['genero']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>                   
                        <table class="table table-borderless table-hover">
                            <tr>
                                <th class="text-center">
                                    hombres
                                </th>
                                <th class="text-center">
                                    mujeres
                                </th>
                                <th class="text-center" >
                                    total
                                </th>                              
                            </tr>                                                          
                            
                            <tr>
                                <td class="text-center" >
                                <?php
                        if (isset($_SESSION['hombre'])) {
                            echo  count($_SESSION['hombre']);
                        }
                        ?>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">
                                    <div>
                                        <?php
                                        if (isset($_SESSION['mujer'])) {
                                            echo  count($_SESSION['mujer']);
                                        }
                                        ?>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                            <tr  >
                                <td></td>
                                <td></td>
                                <td class=" table-dark text-center text-white align-middle fw-bold" >
                                <div>
                        <?php
                        if (isset($_SESSION['hombre'])) {
                            echo $clase->mostrar();
                        }
                        ?>
                    </div>
                                </td>
                            </tr>
                        </table>                                                                
                </section>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
