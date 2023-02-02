<?php 
 
                        if(!$carro || !isset($carro[md5($fila["id"])]['identificador'])|| $carro[md5($fila['id'])]['identificador']!= md5($fila['id'])){
?>

<a class="sin " href="agregacar.php?<?php echo SID;?>&id=<?php echo $fila['id']?>">Agregar
    al carrito</a>

<?php 
                     
                     
                     }else{
                                  
                                  ?>
<a class="sin " href="borrarcar.php?<?php echo SID;?>&id=<?php echo $fila['id']?>"> Borrar
    del carrito</a>
<?php 
                            }
                            ?>