<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Libros</title>
    <!--<link rel="stylesheet" href="css/InicioLibros.css">-->
    <link rel="stylesheet" href="../css/varraNavegacion.css">
    <script src="../js/barraBusquedad.js" defer></script> 
</head>
<body>
<div class="navbar">
        <div class="title">LIBROS</div>
        <div class="nav-links">
        <a href="InicioLibros.php">
            <button>inicio</button>
        </a>
        <a href="registroLibros.html">
            <button>registrar libro</button>
        </a>
        <a href="coleccionLibros.php">
            <button>colección</button>
        </a>
        <a href="Carrito.php">
            <button>carrito</button>
        </a>
        <a href="register.php">
            <button>registrarse</button>
        </a>
        </div>

        <div class="search-box">
        <input type="text" placeholder="Buscar libros...">
        <button class="search-btn">🔍</button>
    </div>
    
    </div>
    <hr>
    <?php
// Definimos las secciones de navegación y filtros
$filtros = [
    'Categoría' => ['Novela', 'Biografías'],
    'Género' => ['Terror', 'Romance'],
    'Filtrar por' => ['Pago ', 'Gratis'],
];
?>
<!-- Nuevos botones para Categoría, Género y Gratis/Pago -->
<div class="botones-filtro">
    <?php foreach ($filtros as $filtro => $opciones): ?>
        <div class="contenedor-boton-filtro">
            <button class="boton-filtro" onclick="toggleOpciones('<?php echo strtolower($filtro); ?>')">
                <?php echo $filtro; ?> <span class="icono-desplegable">▼</span>
            </button>
            <div id="<?php echo strtolower($filtro); ?>" class="opciones-filtro">
                <?php foreach ($opciones as $opcion): ?>
                    <a href="#"><?php echo $opcion; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>


</body>
</html>
