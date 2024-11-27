<?php
session_start();
$usuario_correcto = "admin";
$contrasena_correcta = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["username"];
    $contrasena = $_POST["password"];

    if ($usuario == $usuario_correcto && $contrasena == $contrasena_correcta) {
        $_SESSION["usuario"] = $usuario;
        header("Location: seccion/viajes.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background:url(../img/avion.png) no-repeat center center fixed;
            background-size: cover; /* Asegura que la imagen cubra toda la pantalla */
           
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        .login-container img {
            width: 60px;
            margin-bottom: 20px;
        }

        .login-container h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-weight: bold;
            color: #444;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #2193b0; 
            background: linear-gradient(to right, #6dd5ed, #2193b0);
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }

        .login-button:hover {
            background: linear-gradient(to right, #2193b0, #6dd5ed);
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .footer a {
            color: #2193b0;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="../img/usuario.png" alt="User Icon">
        <h2>Iniciar Sesión</h2>
        
        <?php if (isset($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Usuario</label>
                <input type="text" name="username" id="username" placeholder="Ingrese su usuario" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
            </div>

            <button type="submit" class="login-button">Ingresar</button>
        </form>

       
    </div>
</body>
</html>
