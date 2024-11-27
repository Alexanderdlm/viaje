<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php $url="http://".$_SERVER["HTTP_HOST"]."/viajes"; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
        <li class="nav-item">
            <a class="nav-link" href="../inicio.php">Inicio</a>
        </li>
        <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/viajes.php">Viajes</a>
        <a class="nav-item nav-link" href="<?php echo $url; ?>/administrador/seccion/cerrar.php">Cerrar</a>
        <a class="nav-item nav-link" href="<?php echo $url; ?>/index.php">Ver sitio web</a>
    </div>
</nav>

<div class="container">
    <div class="row">
