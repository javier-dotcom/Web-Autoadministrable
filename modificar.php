<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
    .form {
        margin-top: 20px;
        display: flex;
        justify-content: space-around;
    }

    .form2 {
        margin-top: 5px;
        display: flex;
        justify-content: space-evenly;
        padding: 20px;
    }

    .form1 {

        display: flex;
        flex-direction: column;
    }

    h1 {
        text-align: center;
    }

    body {
        background-color: black;
    }

    .menu {
        display: flex;
        flex-direction: row;
        justify-content: space-between
    }

    h3 {
        text-align: center;
        color: whitesmoke;

    }



    .input {
        text-align: center;
        background-color: rgb(36, 36, 36);
        border: none;
        border-radius: 6px;
        color: whitesmoke;
        padding: 8px;

    }



    table,
    h2,
    h3 {
        text-align: center;
        color: gray;
    }

    tr,
    td {
        padding: 8px;
        border: 1px solid white;

    }


    .resalta,
    .nombre {
        background-color: antiquewhite;
        color: black;
        font-weight: bold;
    }

    .input1 {
        padding: 8px;
        text-align: center;
        background-color: rgb(36, 36, 36);
        border: none;
        border-radius: 6px;

        color: whitesmoke;
    }

    .a {
        text-decoration: none;
        color: whitesmoke;
    }

    .tarde {

        display: flex;
        flex-direction: column;
    }

    .tablas {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                TIENDA DE ROPA
            </a>
            <button class="navbar-toggler menu" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span> &nbsp;&nbsp; <h4>MENU</h4>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU - TIENDA DE ROPA</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="cargar.php? id=todo los productos">CARGAR PRODUCTOS</a>
                        </li>
                        <br>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">
                                VER PAGINA PUBLICA</a>
                        </li>
                        <br>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="administrador.php? id=buzos">MOSTRAR
                                BUZOS - (Modificar-Borrar) </a>
                        </li>
                        <br>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="administrador.php? id=remeras">MOSTRAR
                                REMERAS - (Modificar-Borrar)</a>
                        </li>
                        <br>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="administrador.php? id=todo los productos">MOSTRAR TODO - (Modificar-Borrar)</a>
                        </li>
                        <br>

                        <a class="nav-link active" aria-current="page" href="#">INGRESAR MARCA PARA BUSQUEDA</a>
                        (o al menos las primeras letras)
                        <form class="d-flex mt-3" role="search" action="administrador.php" method="get">

                            <input class="form-control me-2" type="search" id="buscar" name="mar"
                                placeholder="Ingresar marca para buscar " aria-label="Search">
                            <button class="btn btn-success" type="submit" name="buscar">Buscar</button>
                        </form>
                        <br>

                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                ELIJA FILTROS DE PRECIOS PARA VER ROPA
                            </a>

                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="administrador.php? id=precio menor a $ 3000">PRECIO
                                        MENOR A 3000
                                        $</a></li>
                                <li><a class="dropdown-item"
                                        href="administrador.php? id=precio entre $ 3000 y $ 5000">PRECIO ENTRE 3000 y
                                        5000
                                        $</a></li>
                                <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="administrador.php? id=precio entre $ 5000 y $ 7000">PRECIO
                                ENTRE 5000 y 7000
                                $</a></li>
                    </ul>
                    </li>
                    </ul>


                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>




    <?php 

require_once "conectar.php";

$id=$_GET["id"];
echo $id;



$accion="SELECT * FROM ropa WHERE id ='$id'"; 

$hacer=mysqli_query($conexion,$accion);
$fila=mysqli_fetch_array($hacer);
$tipo=$fila['tipoDePrenda'];
$marca=$fila['marca'];
$imagen=$fila['imagen'];
$talle=$fila['talle'];
$precio=$fila['precio'];

$tipo1=$tipo;
$marca1=$marca;
$imagen1=$imagen;
$talle1=$talle;
$precio1=$precio;



//header("Location: administrador.php");
?>
    <h3>Ingrese los campos que desea modificar</h3>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form1">
            <div class="form">
                <div>
                    <h3>TIPO </h3>
                    <input class="input" type="text" name="tipo" placeholder="Tipo de prenda"
                        value="<?php echo $tipo;?>">


                </div>

                <div>

                    <h3>MARCA</h3>

                    <input class="input" type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>">
                </div>

                <div>

                    <h3>TALLE</h3>
                    <input class="input" type="text" name="talle" value="<?php echo $talle;?>">
                </div>

                <div>

                    <h3>PRECIO</h3>
                    <input class="input" type="text" name="precio" value="<?php echo $precio;?>">
                </div>

                <div>

                    <h3>IMAGEN</h3>
                    <input class="input" type="file" name="imagen" value=" $imagen">

                </div>
            </div>
            <div class="form2">
                <input class="input1" type="submit" name="guardar_cambios" value="Guardar Cambios">

            </div>
        </div>


    </form>
    <div class="form2">
        <button class="input1"><a class="a" href="administrador.php?id=todo los productos">Volver</a></button>
    </div>
    <?php
 if(array_key_exists('guardar_cambios',$_POST)){
                    $tipo=$_POST['tipo'];
                    $marca=$_POST['marca'];
                    $talle=$_POST['talle'];
                    $precio=$_POST['precio'];
$consulta ="UPDATE ropa SET tipoDePrenda='$tipo', marca='$marca', talle='$talle', precio='$precio'";
            if (!empty($_FILES['imagen']['tmp_name']))
            {
                $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
                $consulta = $consulta ." , imagen='$imagen' ";
            }
            $consulta = $consulta ." WHERE id ='$id' ";
             mysqli_query($conexion,$consulta);
}
if(isset($_POST["guardar_cambios"])){
   echo "<div class='tablas'>";
   echo "<div>";
echo" <h2>Tabla con los datos originales de este producto</h2>";
echo "<table border=3px; >";
echo"<tr class=resalta><td>ID</td><td>Tipo Prenda</td><td>Marca Prenda</td><td>Talle Prenda</td><td>Precio Prenda</td><td>Imagen Prenda</td></tr>";
echo "<tr>";
    echo "<td class='nombre'>" . $id . "</td>". "<td>".strtoupper( $tipo1) . "</td><td>" . strtoupper($marca1). "</td><td > " . strtoupper($talle1). "</td><td> $ " .strtoupper( $precio1) . "</td><td>"; ?>
    <img src="data:image/jpg;base64,<?php echo base64_encode($imagen1)?>" width="80px" height="80px">
    <?php
    
echo"</tr>";
echo "</table>";
 echo "</div>";
 echo "<div>";

echo "<h2>Tabla con los datos cambiados por usted </h2>";
$accion="SELECT * FROM ropa WHERE id ='$id'"; 

$hacer=mysqli_query($conexion,$accion);
$fila=mysqli_fetch_array($hacer);
$tipo=$fila['tipoDePrenda'];
$marca=$fila['marca'];
$imagen=$fila['imagen'];
$talle=$fila['talle'];
$precio=$fila['precio'];

echo "<table border=3px; >";
echo"<tr class=resalta><td>ID</td><td>Tipo Prenda</td><td>Marca Prenda</td><td>Talle Prenda</td><td>Precio Prenda</td><td>Imagen Prenda</td></tr>";
echo "<tr>";


    echo "<td class='nombre'>" . $id . "</td>". "<td>".strtoupper( $tipo) . "</td><td>" . strtoupper($marca). "</td><td > " . strtoupper($talle). "</td><td> $ " .strtoupper( $precio) . "</td><td>"; ?>
    <img src="data:image/jpg;base64,<?php echo base64_encode($imagen)?>" width="80px" height="80px">

    <?php
echo"</tr>";
echo "</table>";
}
 echo "</div>";
 echo "</div>";
?>
    <br>
    <br>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>