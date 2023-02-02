<?php
session_start();

//con session_start() creamos la sesión si no existe o la retomamos si ya
//ha sido creada.

unset($_SESSION['carro']);


header("Location:vercarrito.php");
?>