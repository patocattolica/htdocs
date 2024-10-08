<?php
    include("conexion.php");
    //Esto es lo mismo que ingresar.php pero la consulta es un update
    if(isset($_POST['env'])){
        $nom = $_POST['nombre'];
        $pre = $_POST['precio'];
        $stk = $_POST['stock'];
        $fven = $_POST['fven'];
        $id = $_POST['id'];
        
        $query="UPDATE productos SET nombre='$nom', precio='$pre', stock='$stk', fven='$fven' WHERE idproducto=$id";
        $res=pg_query($conex,$query);

        if($res){
            ?>
                <h3>Ingresó correctamente</h3>
            <?php
        }
        header("location:ingresarProductos.php");

    }
?>