<?php
session_start();
require 'conectar.php';
$id=$_GET['id'];
$c=$_GET['c'];
$t=$_GET['t'];
if(!isset($cantidad)){$cantidad=1;}
$consulta="SELECT * FROM ropa WHERE id= $id";
$datos= mysqli_query($conexion, $consulta);

$fila= mysqli_fetch_array($datos);

if(isset($_SESSION["carro"]))
$carro=$_SESSION["carro"];

$carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'id'=>$id,
'imagen'=>$fila['imagen'],'marca'=>$fila['marca'],'precio'=>$fila['precio'],
'tipo'=>$fila['tipoDePrenda'],'c'=>$c,'t'=>$t);

$_SESSION["carro"]=$carro;

header("Location:vercarrito.php?".SID."&id=".$id."&precio=". $precio);
?>