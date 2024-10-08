<?php
    include("conexion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Listado de productos</title>
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
    <!-- Creo la tabla -->
    <table>
        <!-- Creo la fila encabezado -->
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Fecha vencimiento</th>
        </tr>
        <!-- Antes de las filas realizo la logica en php -->
        <?php
            /* Creo la consulta*/
            $query="SELECT * FROM productos ORDER BY precio";
            /*La guardo en $res */
            $res = pg_query($conex,$query);
            /*Defino esta variable auxiliar para que funcione de indice */
            $i=0;
            /*Este while repite hasta que sea el ultimo registro de la tabla */
            while($fila = pg_fetch_array($res)){
                $i++;
                ?>
                <tr>
                    <!-- Creo la fila con los datos recibidos en $fila -->
                    <td><?=$i?></td>
                    <td><?=$fila[1]?></td>
                    <td><?=$fila[2]?></td>
                    <td><?=$fila[3]?></td>
                    <td><?=$fila[4]?></td>
                    <!-- Envio a los enlaces por url en la variable t el id de la fila seleccionada -->
                    <td><a href="actualizarProductos.php?t=<?=$fila[0]?>">Actualizar</a></td>
                    <td><a href="eliminar.php?t=<?=$fila[0]?>">Eliminar</a></td>
                </tr>
                <?php
            }
        ?>
        
    </table>
</body>
</html>