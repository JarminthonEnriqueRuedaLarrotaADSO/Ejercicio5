<?php
session_start();
//session_destroy();

include ("operaciones.php");

$clase = new clase;

$clase->setGenero($_POST['genero']);
$clase->setNombre($_POST['nombre']);
$clase->setClose($_POST['Close']);

// $clase->setHombre($_POST['genero']);
// $clase->setMujer($_POST['genero']);

// $clase->validarGenero();
$clase->cerrarSesion();
$clase->guardar();


header(("Location: index.php"));