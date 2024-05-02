<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Gaming by ESD Labs</title>
    <!--<link rel="stylesheet" href="css/styles.css">-->
    <style>
        .background-image {
            background-image: url('img/fondo.jpg'); /* Ruta relativa a la imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 100vh; /* Ajusta la altura según sea necesario */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white; /* Color del texto */
            text-align: center;
        }
        .content {
            background-color: rgba(0, 0, 0, 0.5); /* Color de fondo semi-transparente */
            padding: 20px;
            border-radius: 10px;
            font-family: Tahoma, sans-serif;
        }
        /* Estilos adicionales para el contenido */
         .btn {
            font-size: 24px; /* Tamaño de fuente más grande */
            color: white; /* Color del texto blanco */
            text-decoration: none; /* Quitar subrayado */
        }
        .btn:hover {
            color: lightgray; /* Cambiar color del texto al pasar el ratón */
        }
    </style>
</head>
<body>
    <div class="background-image">
        <div class="content">
            <h1>Bienvenido al CRUD Gaming by ESD Labs</h1>
            <br>
            <p><strong>Administra tu colección de videojuegos de manera fácil y rápida.</strong></p>
            <br>
            <a href="listar.php" class="btn"><strong>Ir al listado de Videojuegos</strong></a>
        </div>
    </div>
    <?php include 'pie.php'; ?>
</body>
</html>


