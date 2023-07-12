<?php
session_start();
// session_destroy();

include ("operaciones.php");

$clase = new clase;

$clase->setGenero($_POST['genero']);
$clase->setNombre($_POST['nombre']);
// $clase->setHombre($_POST['genero']);
// $clase->setMujer($_POST['genero']);

// $clase->validarGenero();
$clase->guardar();


header(("Location: index.php"));