<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Creo la cabecera que contiene la navegacion y el titulo -->
    <header>
        <div class="izqhead">
            <h1>Registro de productos</h1>
        </div>
        <div class="derhead">
            <a href="ingresarProductos.php">Ingresar</a>
            <a href="listarProductos.php">Listar</a>
        </div>
    </header>
    <!-- Creo el contenedor que almacena el formulario -->
    <div class="contenedor">
        <!-- Creo el formulario el cual tiene como action el archivo ingresar.php y el metodo post -->
        <form action="ingresar.php" method="post">
            <input class="inpt" type="text" name="nombre" placeholder="Nombre" maxlenght="7">
            <input class="inpt" type="text" name="precio" placeholder="Precio">
            <input class="inpt" type="text" name="stock" placeholder="Stock">
            <input class="f" type="date" name="fven">
            <input class="b" type="submit" name="reg" value="Enviar">
        </form>
    </div>
</body>
</html>