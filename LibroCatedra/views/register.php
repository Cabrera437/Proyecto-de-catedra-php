<?php
session_start();
$mensaje = isset($_GET["error"]) ? $_GET["error"] : "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registroUsuario.css">  
</head>
<body>
    <div class="card">
        <h2>Registro de Usuario</h2>

        <?php if (!empty($mensaje)) : ?>
            <p class="error"><?php echo htmlspecialchars($mensaje); ?></p>
        <?php endif; ?>

        <form action="../controllers/register.php" method="POST">
            <div class="input-group">
                <label for="email">Ingresa tu Email</label>
                <input type="email" id="email" name="usuario" placeholder="Ingrese un correo electrónico" required>
            </div>

            <div class="input-group">
                <label for="password">Crear una Contraseña</label>
                <input type="password" id="password" name="contraseña" placeholder="Ingrese su contraseña" required>
            </div>

            <button type="submit">Registrarse</button>
        </form>

        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
    </div>
</body>
</html>
