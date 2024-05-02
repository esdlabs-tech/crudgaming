<?php
$mysqli = include_once "conexion.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"]; 

$sentencia = $mysqli->prepare("UPDATE videojuegos SET
nombre = ?,
descripcion = ?,
cantidad = ? 
WHERE id = ?");
$sentencia->bind_param("ssii", $nombre, $descripcion, $cantidad, $id); 
$sentencia->execute();
header("Location: listar.php");
?>
