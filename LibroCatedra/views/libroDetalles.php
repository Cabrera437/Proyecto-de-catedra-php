<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro Registrado</title>
    <link rel="stylesheet" type="text/css" href="../css/vistaDetalle.css">
    <link rel="stylesheet" type="text/css" href="../css/registro.css"></link>
</head>
<body>
    <div class="navbar">
        <div class="title">LIBROS</div>
        <div class="nav-links">
            <a href="InicioLibros.php"><button>inicio</button></a>
            <a href="registroLibros.html"><button>registrar libro</button></a>
            <a href="coleccionLibros.php"><button>colección</button></a>
            <a href="Carrito.php"><button>carrito</button></a>
            <a href="register.php"><button>registrarse</button></a>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="book-info">
            <h2>Registro de Libro</h2>
            <hr class="separador">

            <div class="book-details">
                <div class="book-cover">
                    <img src="img/default-book.jpg" alt="Portada del libro">
                </div>
                
                <div class="book-data">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $titulo = htmlspecialchars($_POST["titulo"]);
                        $autor = htmlspecialchars($_POST["autor"]);
                        $genero = htmlspecialchars($_POST["genero"]);
                        $numPag = htmlspecialchars($_POST["num-pag"]);
                        $categoria = htmlspecialchars($_POST["categoria"]);
                        $descripcion = htmlspecialchars($_POST["descripcion"]);
                        $precio = !empty($_POST["precio"]) ? htmlspecialchars($_POST["precio"]) : "Gratis";

                        echo "<p><strong>Título:</strong> $titulo</p>";
                        echo "<p><strong>Autor/a:</strong> $autor</p>";
                        echo "<p><strong>Género:</strong> $genero</p>";
                        echo "<p><strong>Número de páginas:</strong> $numPag</p>";
                        echo "<p><strong>Categoría:</strong> $categoria</p>";
                        echo "<p><strong>Descripción:</strong> $descripcion</p>";
                        echo "<p><strong>De pago:</strong> $precio</p>";
                    } else {
                        echo "<p>Error: No se enviaron datos.</p>";
                    }
                    ?>
                    <button onclick="window.history.back();">Volver</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
