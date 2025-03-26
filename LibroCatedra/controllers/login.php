<?php
session_start();
include '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST["usuario"]);
    $contraseña = trim($_POST["contraseña"]);

    $sql = "SELECT id, contraseña FROM usuarios WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);
    
    if ($stmt->fetch()) {
        if (password_verify($contraseña, $hashed_password)) {
            $_SESSION["usuario"] = $usuario;
            header("Location: ../views/inicioLibros.php"); 
            exit();
        } else {
            header("Location: ../views/login.php?error=Contraseña incorrecta");
            exit();
        }
    } else {
        header("Location: ../views/login.php?error=Usuario no encontrado");
        exit();
    }
}
?>
