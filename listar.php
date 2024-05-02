<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, descripcion, cantidad FROM videojuegos");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>

        <div class="content">
<div class="row">
    <div class="col-12">
        <h1>Listado de videojuegos</h1>
    </div>
    <div class="col-12">
       <a class="btn btn-success my-2" href="registrar.php"><i class="fas fa-plus-circle"></i> Agregar nuevo</a>
            <table class="table" style="border-collapse: collapse;">           
    <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>                    
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($videojuegos as $videojuego) { ?>
                    <tr>
                        <td><?php echo $videojuego["id"] ?></td>
                        <td><?php echo $videojuego["nombre"] ?></td>
                        <td><?php echo $videojuego["descripcion"] ?></td>
                        <td><?php echo $videojuego["cantidad"] ?></td>
                        <td>
                                <a class="btn btn-primary" href="editar.php?id=<?php echo $videojuego["id"] ?>"><i class="fas fa-edit"></i> Editar</a>
                        </td>
                        <td>
                                <a class="btn btn-danger" href="eliminar.php?id=<?php echo $videojuego["id"] ?>"><i class="fas fa-trash-alt"></i> Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
                     <a href="index.php" class="btn btn-secondary"><i class="fas fa-home"></i> Volver a Inicio</a>
    </div>
</div>
             </div>
   
<?php include_once "pie.php" ?>