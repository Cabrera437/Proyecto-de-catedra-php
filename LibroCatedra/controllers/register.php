<?php
include '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);

    // Verificar si el usuario ya existe
    $sql_check = "SELECT id FROM usuarios WHERE usuario = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $usuario);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        header("Location: ../views/register.php?error=El usuario ya existe");
        exit();
    }

    
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    
    $sql = "INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contraseña_hash);

    if ($stmt->execute()) {
        header("Location: ../views/login.php");
        exit();
    } else {
        header("Location: ../views/register.php?error=Error al registrar el usuario");
        exit();
    }
}
?>
