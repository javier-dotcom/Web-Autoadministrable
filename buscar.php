<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="tarea_8.css">
    <style>
    body {
        background-color: rgba(79, 28, 13);
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

    .tipo {
        background-color: red;
        padding: 4px;
        color: white;
        border-radius: 7px;
    }

    .boton {
        text-align: center;
        display: flex;
        flex-direction: column;
    }



    .h2 {
        color: beige;
        text-align: center;
        margin-top: 40px;
    }

    .ba {
        background-color: rgb(13, 64, 79);
        padding: 10px;
    }

    .separar {

        margin-top: 70px;
    }

    .c {
        background-color: rgb(13, 64, 79, 0.6);
        margin-top: 7px;
        border: solid 4px rgba(79, 28, 13);

    }

    .im {
        border-radius: 9px;
        margin-top: 9px;
    }

    .tienda {
        color: beige;
    }

    .bot {
        display: flex;
        justify-content: space-between;
    }

    .lui {
        margin: 5px;
    }

    .bott {
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 80%;
    }

    h3 {
        text-align: center;
    }

    .ad {
        color: red;
    }
    </style>
    <title>Potrero Digital</title>

</head>

<body>
    <nav class="navbar ba fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand tienda" href="index.html">Tienda de ropa</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>MENU
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tienda de ropa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="todo.php">VER TODOS LOS PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="buzos.php">VER BUZOS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="remeras.php">VER REMERAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="marcanike.php">VER ROPA NIKE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="marcaadidas.php">VER ROPA ADIDAS</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="administrador_login.html">
                                <h5 class="ad">ADMINISTRADOR</h5>
                                <h6 class="ad">Requiere contraseña</h6>
                            </a>
                        </li>
                        <br>
                        <br>

                        <a class="nav-link active" aria-current="page" href="#">INGRESAR MARCA PARA BUSQUEDA</a>
                        (o al menos las primeras letras)
                        <form class="d-flex mt-3" role="search" action="buscar.php" method="get">

                            <input class="form-control me-2" type="search" id="buscar" name="mar"
                                placeholder="Ingresar marca para buscar " aria-label="Search">
                            <button class="btn btn-success" type="submit" name="buscar">Buscar</button>
                        </form>
                        <br>

                        <br>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <h5>Elija rangos de precios para prendas</h6>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="menosde500.php? id= < 500">Menos de 500</a></li>
                                <li><a class="dropdown-item" href="menosde500.php? id= >500 AND precio<2000">Mas de
                                        $500 y
                                        menos de $2000</a></li>
                                <li><a class="dropdown-item" href="menosde500.php? id= >2000 AND precio<4000">Mas de
                                        $2000 y
                                        menos de $4000</a></li>

                                <li>
                                    <hr class="dropdown-divider">
                                <li><a class="dropdown-item" href="menosde500.php? id= >4000 AND precio<7000">Mas de
                                        $4000 y
                                        menos de $7000</a></li>

                                <li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <?php
require_once "conectar.php";

if(isset($_GET["buscar"])){
$buscar=$_GET["mar"];


$datos="SELECT * FROM ropa WHERE marca LIKE '$buscar%'";




}else{

$datos="SELECT * FROM ropa WHERE marca LIKE 'adidas'";
$buscar="Adidas";
}



$carga=mysqli_query($conexion,$datos);
?>

            <div>
                <p class="h2">Elegiste ver prendas <?php echo $buscar;?></p>
            </div>
            <div class="boton">
                <div class="lui">
                    <button type="button" class="btn btn-primary lui"><a class="btn btn-primary"
                            href="index.html">INICIO</a>
                    </button>
                    <button type="button" class="btn btn-secondary lui"><a class="btn btn-secondary"
                            href="marcanike.php">Marca
                            NIKE</a></button>
                    <button type="button" class="btn btn-success lui"><a class="btn btn-success"
                            href="marcaadidas.php">Ver Adidas</a></button>
                </div>
                <div class="lui">
                    <button type="button" class="btn btn-danger lui"><a class="btn btn-danger"
                            href="remeras.php">REMERAS</a></button>
                    <button type="button" class="btn btn-warning lui"><a class="btn btn-warning"
                            href="buzos.php">BUZOS</a></button>
                    <button type="button" class="btn btn-info lui"><a class="btn btn-info" href="todo.php">Todas las
                            prendas</a></button>
                </div>
            </div><?php
while($fila=mysqli_fetch_array($carga)){
    ?>
            <div class="card c" style="width: 16rem; margin:auto">
                <img src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"])?>" class="card-img-top im"
                    alt="..." height="280">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <!--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>-->
                    <a href="detalles.php? id=<?php echo $fila['id']?>" class="btn btn-primary c ">Detalles de
                        producto</a>
                    <div class="bot">


                        <a href="#" class="btn btn-primary c"> <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path
                                    d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                            </svg></a>
                        <a href="#" class="btn btn-primary c"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="4" width="16" height="16" rx="4" />
                                <circle cx="12" cy="12" r="3" />
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                            </svg></a>
                        <a href="#" class="btn btn-primary c"> <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <?php
}
      

            
        
        ?>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>