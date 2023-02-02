<?php
session_start();
$nombre=$_POST['nom'];

$_SESSION["nombre"] = $nombre;
$usu=$_POST['usu'];
$con=$_POST['con'];
$usuario="potrero";
$contrasena="potrero";
if($usu==$usuario && $con==$contrasena){
Header("Location:administrador.php? id= todos los productos");
}else{
Header("Location:error.php? id= 'todos los productos'");

    
}
    ?>