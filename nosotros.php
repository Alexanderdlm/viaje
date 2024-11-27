<?php include("template/cabecera.php"); ?>

<head>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        /* Imagen de fondo para la sección de nosotros */
        #about-wrapper {
            background-image: url('ruta-de-imagen-de-fondo.jpg'); /* Ruta de la imagen */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            
            padding: 80px 0;
        }

        #about-wrapper h2 {
            font-size: 2.5em;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        #about-wrapper p {
            font-size: 1.2em;
            text-align: center;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .team-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .team-member {
            margin: 20px;
            text-align: center;
            width: 250px;
        }

        .team-member img {
            width: 100%;
            border-radius: 50%;
            height: 200px;
            object-fit: cover;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .team-member h3 {
            font-size: 1.5em;
            color: #3498db;
            margin-top: 10px;
        }

        .team-member p {
            font-size: 1em;
            color: #ecf0f1;
        }
    </style>
</head>

<body>
    <section id="about-wrapper">
        <h2>Nosotros</h2>
        <p>En Viajes alex y wero, somos un equipo dedicado a ofrecer los mejores destinos turísticos para ti. Nos apasiona brindarte experiencias inolvidables y ayudarte a descubrir nuevos lugares para tus vacaciones. Con años de experiencia en la industria del turismo, nos esforzamos por hacer de tu viaje algo especial y único.</p>

        <h3>Misión</h3>
        <p>Proveer experiencias de viaje únicas y memorables, adaptadas a las necesidades y preferencias de cada uno de nuestros clientes, con un enfoque de calidad y servicio excepcional.</p>

        <h3>Visión</h3>
        <p>Ser la agencia de viajes líder en el mercado, destacando por nuestra dedicación, responsabilidad y pasión por el turismo, creando recuerdos que perduren por siempre en los corazones de nuestros clientes.</p>

        <h3>Valores</h3>
        <ul>
            <li>Compromiso con la calidad</li>
            <li>Atención personalizada</li>
            <li>Pasión por el turismo</li>
            <li>Responsabilidad social y ambiental</li>
        </ul>

        <div class="team-section">
            <div class="team-member">
                <img src="img/dibujos-animados-ilustracion-vector-gerente-empresa_969863-379.jpg" alt="Miembro 1">
                <h3>DIEGO CRUZ</h3>
                <p>Director General</p>
            </div>
            <div class="team-member">
                <img src="img/retrato-hombre-negocios-moderno-ilustracion-vectorial-dibujos-animados_969863-726.jpg" alt="Miembro 2">
                <h3>ALECANDER CARMONA</h3>
                <p>Especialista en Turismo</p>
            </div>
          
        </div>
    </section>

    <?php include("template/pie.php"); ?>
</body>
