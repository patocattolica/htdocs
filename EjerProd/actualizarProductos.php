<?php
    /*Este archivo es una copia de la pagina de ingresar productos */
    include('conexion.php');
    /*Recibo por el metodo get lo que envie por url */
    $id=$_GET['t'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="izqhead">
            <h1>Registro de productos</h1>
        </div>
        <div class="derhead">
            <a href="ingresarProductos.php">Ingresar</a>
            <a href="listarProductos.php">Listar</a>
        </div>
    </header>
    <div class="contenedor">
        <?php
            /*Realizo la consulta para traer el registro especifico */
            $query = "SELECT * FROM productos WHERE idproducto='$id'";
            $res = pg_query($conex,$query);
            /*Lo guardo en el array fila */
            $fila = pg_fetch_array($res);
            /*Asigno a las siguientes variables lo recibido en fila */
            $nom = $fila[1];
            $pre = $fila[2];
            $stk = $fila[3];
            $f = $fila[4];
        ?>
        <form action="actualizar.php" method="post">
            <!-- En value asigno lo guardado en la variables -->
            <input class="inpt" type="text" name="nombre" value="<?=$nom?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="inpt" type="text" name="precio" value="<?=$pre?>">
            <input class="inpt" type="text" name="stock" value="<?=$stk?>">
            <input class="f" type="date" name="fven" value="<?=$f?>">
            <input class="b" type="submit" name="env" value="Enviar">
        </form>
    </div>
</body>
</html>