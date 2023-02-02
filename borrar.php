<?php 

require_once "conectar.php";

$id=$_GET["id"];
$accion="DELETE FROM ropa WHERE id= $id";
$hacer=mysqli_query($conexion,$accion);
header("Location: administrador.php? id=todos los productos");














?>