<?php

include("../Model/conexion.php");

$conexion = $mysqli;

$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$producto = $_POST['producto'];
$precioUnitario = $_POST['precioUnitario'];
$cantidad = $_POST['cantidad'];
$precioTotal = $_POST['precioTotal'];

$sql = "INSERT INTO ventas (nombre, dni, producto, precioUnitario, cantidad, precioTotal) VALUES ('$nombre','$dni','$producto','$precioUnitario','$cantidad','$precioTotal')";
$query = mysqli_query($conexion,$sql);

if($query){
    Header("Location: ../index.php");
}

?>