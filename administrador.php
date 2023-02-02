<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>ADMINISTRADOR</title>
    <style>
    table {
        text-align: center;
        color: gray;
        max-width: 1400px;

    }

    @media (max-width: 768px) {
        table {
            max-width: 200px;
            width: 30%;
        }

        tr,
        td {
            padding: 1px;
        }
    }



    h2,
    h3 {
        text-align: center;
        color: gray;
    }



    tr,
    td {
        padding: 10px;
        border: 2px solid white;

    }

    .resalta {
        background-color: antiquewhite;
        color: black;
        font-weight: bold;
    }

    .tabla {
        display: flex;
        justify-content: space-around;
    }

    .tabla1 {
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .nombre {
        background-color: aquamarine;
        color: black;
        font-weight: bold;

    }

    .oper {
        background-color: crimson;

    }

    .ar {
        text-decoration: none;
        color: black;
        font-weight: bold;

    }



    .bo:hover {
        background-color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand u" href="#">
                TIENDA DE ROPA
            </a>

            <a class="navbar-brand u" href="#">
                USUARIO <?php echo strtoupper( $_SESSION["nombre"]); ?>
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

$datos="SELECT * FROM ropa ";
$datos1="SELECT * FROM ropa WHERE tipoDePrenda ='buzo'";
$datos2="SELECT * FROM ropa WHERE tipoDePrenda ='remera'";
$datos3="SELECT * FROM ropa WHERE precio < 3000 ";
$datos4="SELECT * FROM ropa WHERE precio < 5000  AND precio > 3000";
$datos5="SELECT * FROM ropa WHERE precio < 7000  AND precio > 5000";
$comodin=$datos;
if(isset($_GET["buscar"])){
   
$dato=$_GET["mar"];
$id=$_GET["mar"];

$datos6="SELECT * FROM ropa WHERE marca LIKE '$dato%'";
$comodin=$datos6;

}

if(!isset($_GET["buscar"])){

$id="$datos";
$id=$_GET["id"];

if($id =="buzos"){
$comodin=$datos1;
}else if($id=="remeras"){
$comodin=$datos2;

}else if($id=="todo los productos"){

$comodin=$datos;

}else if($id=="precio menor a $ 3000"){

$comodin=$datos3;

}else if($id=="precio entre $ 3000 y $ 5000"){

$comodin=$datos4;

}else if($id=="precio entre $ 5000 y $ 7000"){
$comodin=$datos5;

}
}



$carga=mysqli_query($conexion,$comodin);
echo "<div class=tabla>";
echo "<div>";
echo "<table border=3px; >";
echo "<h2>PAGINA PARA ADMINISTRAR TIENDA</h2>";
echo "<h2>Tabla con $id</h2>";
echo"<h3> Hola " . $_SESSION['nombre'] . " podes usar el menu lateral</h3>";
echo"<tr class=resalta><td>ID</td><td>Tipo Prenda</td><td>Marca Prenda</td><td>Talle Prenda</td><td>Precio Prenda</td><td>Imagen Prenda</td><td>Modificar</td> <td> Borrar</td></tr>";
echo "<tr>";
while($fila=mysqli_fetch_array($carga)){

    echo "<td class='nombre'>" . $fila["id"] . "</td>". "<td>".strtoupper( $fila["tipoDePrenda"]) . "</td><td>" . strtoupper($fila["marca"]). "</td><td > " . strtoupper($fila["talle"] ). "</td><td> $ " .strtoupper( $fila["precio"]) . "</td><td>"; ?>
    <img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen'])?>" width="80px" height="80px">

    <?php echo "</td>  <td class='bo'> "?> <a class="ar" href="modificar.php? id=<?php echo $fila['id']?>"> CLICK PARA
        MODIFICAR
        <br><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-replace" width="48" height="48"
            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <rect x="3" y="3" width="6" height="6" rx="1" />
            <rect x="15" y="15" width="6" height="6" rx="1" />
            <path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3" />
            <path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3" />
        </svg> <br> ESTE ARTICULO</a>




    <?php echo "</td> <td class='bo'> "?> <a class="ar " href="borrar.php? id=<?php echo $fila['id']?>" onclick>
        USTED VA A BORRAR <br> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
            width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="4" y1="7" x2="20" y2="7" />
            <line x1="10" y1="11" x2="10" y2="17" />
            <line x1="14" y1="11" x2="14" y2="17" />
            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
        </svg><br>ESTE ARTICULO</a> <?php echo"</td>";
echo"</tr>";

    }
echo "</table>";

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>