<?php
//Creamos sesión, traemos el id con el metodo GET y la conexión con la base de datos.
session_start();

error_reporting(0); // para que no salga el error cuando ingresamos al carrito sin cargar un producto.

$id=$_GET['id'];


//Comprobamos que la variable $carro tenga valor.
if(isset($_SESSION['carro'])){

$carro=$_SESSION['carro'];
}
else{
     $carro=FALSE;
}


//unset($_SESSION['carro']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="tarea_8.css">
    <title></title>
    <style>
    body {
        background-color: rgba(79, 28, 13);
    }

    table {
        margin: 70px auto;
        text-align: center;
        border: 7px solid rgb(13, 64, 79);
        background-color: black;


    }

    .r {
        display: flex;
        justify-content: space-around;
    }

    .c {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .tienda {
        color: beige;
    }

    .tipo {
        background-color: red;
        padding: 4px;
        color: white;
        border-radius: 7px;
    }

    .boton {
        text-align: center;
    }

    h1 {
        background-color: rgb(13, 64, 79);
        color: white;
        width: 60%;
        margin: 20px auto;
        padding: 10px;
        border-radius: 20px;
    }

    .h2 {
        color: beige;
        text-align: center;
        margin-top: 60px;
    }

    .inicio {
        margin: 70px auto;
        display: flex;
        justify-content: space-evenly;
        width: 50%;
    }

    .ba {
        background-color: rgb(13, 64, 79);
        padding: 10px;
    }

    .f {
        width: 700px;
        height: 300px;
        margin: 20px auto;
    }

    .lui {
        margin: 5px;
    }

    tr,
    td {

        padding-left: 20px;
        padding-right: 20px;
        border: 7px double rgb(13, 64, 79);
    }


    span {
        background-color: rgba(79, 28, 13);
        padding: 8px;
        border: 2px solid rgb(13, 64, 79);
        border-radius: 10px;
        width: 10px;
    }

    .espacio {
        padding: 8px;

    }

    .ar {
        text-decoration: none;
        color: black;
        font-weight: bold;
        align-items: center;

    }



    .bo:hover {
        background-color: white;
    }
    </style>
</head>

<body>
    <nav class="navbar ba fixed-top ">
        <div class="container-fluid"><a class="navbar-brand tienda" href="index.html">Tienda de ropa</a><button
                class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"><span class="navbar-toggler-icon"></span>MENU </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tienda de ropa</h5><button type="button"
                        class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
                        </li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="todo.php">VER TODOS
                                LOS PRODUCTOS</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="buzos.php">VER
                                BUZOS</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="remeras.php">VER
                                REMERAS</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="marcanike.php">VER
                                ROPA NIKE</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="marcaadidas.php">VER
                                ROPA ADIDAS</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page"
                                href="administrador_login.html">
                                <h5 class="ad">ADMINISTRADOR</h5>
                                <h6 class="ad">Requiere contraseña</h6>
                            </a></li><br><br><a class="nav-link active" aria-current="page" href="#">INGRESAR MARCA PARA
                            BUSQUEDA</a>(o al menos las primeras letras) <form class="d-flex mt-3" role="search"
                            action="buscar.php" method="get"><input class="form-control me-2" type="search" id="buscar"
                                name="mar" placeholder="Ingresar marca para buscar " aria-label="Search"><button
                                class="btn btn-success" type="submit" name="buscar">Buscar</button></form><br><br>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <h5>Elija rangos de precios para prendas</h6>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="menosde500.php? id= < 500">Menos de 500</a></li>
                                <li><a class="dropdown-item" href="menosde500.php? id= >500 AND precio<2000">Mas de $500
                                        y menos de $2000</a></li>
                                <li><a class="dropdown-item" href="menosde500.php? id= >2000 AND precio<4000">Mas de
                                        $2000 y menos de $4000</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="menosde500.php? id= >4000 AND precio<7000">Mas de
                                        $4000 y menos de $7000</a></li>
                                <li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php 
    if($carro) {
        // Si $carro tiene algo lo muestra en la tabla. ?>
    <h2 class="h2">Resumen de su compra</h2>
    <table>
        <tr>
            <td>
                <h2> IMAGEN</h2>
            </td>
            <td>
                <h2> MARCA</h2>
            </td>
            <td>
                <h2>PRENDA</h2>
            </td>

            <td>
                <h2>COLOR</h2>
            </td>

            <td>
                <h2>TALLE</h2>
            </td>

            <td>
                <h2>PRECIO</h2>
            </td>

            <td>
                <h2>BORRAR</h2>
            </td>
        </tr>
        <?php 
        $contador=0;
        $suma=0;
        foreach($carro as $k=> $v) {
            $subto=$v['cantidad']*$v['precio'];
            $suma=$suma+$subto;
            $contador++;
           
            ?><div>
            <tr>

                <td><img src=" data:image/jpg;base64,<?php echo base64_encode($v["imagen"])?>" class="card-img-top im"
                        alt="..." height="90"></td>
                <td><?php echo $v['marca'] ?></td>
                <td><?php echo $v['tipo'] ?></td>
                <td><?php echo $v['c'] ?></td>
                <td><?php echo $v['t'] ?></td>
                <td><?php echo $v['precio'] ?>$<br /></td>
                <td class='bo'>
                    <p><a class="ar " href="borrarcar.php?<?php echo SID ?>&id=<?php echo $v['id']?>">BORRAR
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                width="38" height="38" viewBox="0 0 24 24" stroke-width="1" stroke="#ff2825" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg></a></p>
                </td>
            </tr>
        </div>
        <tr><?php
        }

        //fin foreach ?>

    </table>
    <td colspan="7" class="espacio">
        <br>
        <h2>TOTAL PRODUCTOS : <span><?php echo count($carro);
        ?> productos</span><br><br>TOTAL COMPRA : <span><?php echo number_format($suma, 2);
        echo $c;?> $</span> </h2>
    </td>
    </tr>
    <br>
    <h2> <a class="ar " href="vaciarcarrito.php">Vaciar carrito</a></h2>
    <h2 class="h2">Elija como continuar la compra.</h2><?php
    }

    else {
        // // Si $carro NO tiene nada solo muestra un link a index.php.?>
    <h2 class="h2">El carrito de compra está vacío.</h2>
    <h2 class="h2">Elija como comenzar la compra.</h2><?php
    }

    ?><div class="boton">
        <div class="lui"><button type="button" class="btn btn-primary lui"><a class="btn btn-primary"
                    href="index.html">INICIO</a></button><button type="button" class="btn btn-secondary lui"><a
                    class="btn btn-secondary" href="marcanike.php<?php echo SID?>">Marca NIKE</a></button><button
                type="button" class="btn btn-success lui"><a class="btn btn-success"
                    href="marcaadidas.php<?php echo SID?>">Ver Adidas</a></button></div>
        <div class="lui"><button type="button" class="btn btn-danger lui"><a class="btn btn-danger"
                    href="remeras.php<?php echo SID?>">REMERAS</a></button><button type="button"
                class="btn btn-warning lui"><a class="btn btn-warning"
                    href="buzos.php<?php echo SID?>">BUZOS</a></button><button type="button" class="btn btn-info lui"><a
                    class="btn btn-info" href="todo.php<?php echo SID?>">Todas las
                    prendas</a></button></div>
    </div><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>