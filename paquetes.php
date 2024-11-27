<?php include("template/cabecera.php"); ?>
</div>
</div>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
<style>
        /* Imagen de fondo solo para la página de inicio */
        body h{
            background-image: url('3b76e981-87d8-4a64-a44f-fd73c85cfdfe.jpg'); /* Ruta de la imagen */
            background-size: cover; /* Hace que la imagen cubra toda la página */
            background-position: center; /* Centra la imagen */
            background-attachment: fixed; /
        }

        /* Estilo adicional para el encabezado en la página de inicio */
        #main-header {
            background-image: url('3b76e981-87d8-4a64-a44f-fd73c85cfdfe.jpg'); /* Opcional: Imagen para el encabezado */
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            text-align: center;
        }

        .content {
            padding: 40px;
            text-align: center;
        }
    </style>
    </head>

<body h>
    <div class="container">
        <div class="row">
            <!-- Destino 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/images.jpg" alt="Cancún">
                    <div class="card-body">
                        <h4 class="card-title">Cancún</h4>
                        <p class="card-text">Descubre la magia de las playas de Cancún, México.</p>
                        <a href="destino1.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            
            <!-- Destino 2 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/Machu-Picchu-mirador-I.jpg" alt="Machu Picchu">
                    <div class="card-body">
                        <h4 class="card-title">Machu Picchu</h4>
                        <p class="card-text">Vive la aventura en las montañas de Machu Picchu, Perú.</p>
                        <a href="destino2.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            
            <!-- Destino 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/el-coliseo-de-roma-italia-672.jpg" alt="Roma">
                    <div class="card-body">
                        <h4 class="card-title">Roma</h4>
                        <p class="card-text">Explora la historia y cultura de Roma, Italia.</p>
                        <a href="destino3.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            
            <!-- Destino 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/images (1).jpg" alt="Bali">
                    <div class="card-body">
                        <h4 class="card-title">Bali</h4>
                        <p class="card-text">Relájate en las playas paradisíacas de Bali, Indonesia.</p>
                        <a href="destino4.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Destino 5 -->
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/giappone-tokyo-tempio-panorama.jpg" alt="Tokio y Kioto">
                    <div class="card-body">
                        <h4 class="card-title">Tokio y Kioto</h4>
                        <p class="card-text">Explora la modernidad y tradición en Tokio y Kioto, Japón.</p>
                        <a href="destino5.php" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
       
    
</body>
    </html>
<?php include("template/pie.php"); ?>
