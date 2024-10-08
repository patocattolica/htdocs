<?php
    include("conexion.php");
    $id= $_GET['t'];

    $query="DELETE FROM productos WHERE idproducto='$id'";
    $res = pg_query($conex,$query);

    header("location:listarProductos.php");




?>