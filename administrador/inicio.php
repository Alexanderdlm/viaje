<?php include('template/cabecera.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador de Viajes Alex y Wero</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f7f6;
    }

    header {
      background-color: #4caf50; /* Green background */
      color: white; /* White text */
      padding: 20px;
      text-align: center;
      border-radius: 10px; /* Rounded corners */
      margin: 20px auto;
      width: 80%; /* Center container with margin on sides */
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      box-sizing: border-box;
    }

    .container h1 {
      text-align: center;
      color: #333;
    }

    .container p {
      text-align: justify;
      line-height: 1.6;
      color: #555;
    }

    .feature-list {
      list-style: none;
      padding: 0;
    }

    .feature-list li {
      background-color: #f1f1f1;
      margin: 10px 0;
      padding: 15px;
      border-radius: 5px;
      color: #444;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #333;
      color: white;
      margin-top: 20px;
    }

    footer p {
      margin: 0;
    }
  </style>
</head>
<body>

<header>
  <h1>Bienvenido al Administrador de Viajes Alex y Wero</h1>
</header>

<div class="container">
  <h1>¿Qué es el Administrador de Viajes?</h1>
  <p>
    El Administrador de Viajes Alex y Wero es un sistema innovador diseñado para ayudar a los viajeros a gestionar y planificar sus viajes de forma eficiente. Desde la selección de destinos hasta el seguimiento de itinerarios y presupuesto, nuestro panel de administración facilita el proceso de organización de cualquier tipo de viaje, ya sea de negocios, aventura o recreativo.
  </p>

  <h2>Características principales:</h2>
  <ul class="feature-list">
    <li>Registro y seguimiento de viajes personalizados.</li>
    <li>Gestión de itinerarios, fechas y destinos.</li>
    <li>Creación y envío de documentos y tickets en formato PDF.</li>
    <li>Acceso a recomendaciones de destinos basadas en tus preferencias.</li>
    <li>Control de presupuestos y gastos de cada viaje.</li>
  </ul>

  <h2>Beneficios de usar nuestro sistema:</h2>
  <p>
    Usar el Administrador de Viajes te permitirá tener un control total sobre todos los aspectos de tu viaje. Desde la planificación hasta la ejecución, nuestro sistema te ayudará a reducir el estrés de la organización, optimizando tu tiempo y asegurando que disfrutes de cada etapa de tu aventura.
  </p>

  <h2>Instrucciones:</h2>
  <p>
    Para empezar a planificar tu próximo viaje, selecciona la opción "Gestionar Viajes" en el menú superior. Desde allí podrás crear un nuevo itinerario, gestionar destinos y ajustar tu presupuesto. Si deseas personalizar tus preferencias de viaje, utiliza la opción "Configuración".
  </p>
</div>

<footer>
  <p>2024 © Administrador de Viajes Alex y Wero. Todos los derechos reservados.</p>
</footer>

</body>
</html>

<?php include('template/pie.php'); ?>
