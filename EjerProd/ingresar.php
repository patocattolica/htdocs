<?php
    /*Llamo a conexion.php para realizar la conexion */
    include("conexion.php");

    /*Verifico que se oprimió el boton enviar */
    if(isset($_POST['reg'])){
        /*Asigno a las siguientes variables lo que recibo por el metodo post del form */
        $nom = $_POST['nombre'];
        $pre = $_POST['precio'];
        $stk = $_POST['stock'];
        $fven = $_POST['fven'];

        /*Creo la consulta y la guardo en la variable $query */
        $query="INSERT INTO productos(idproducto,nombre,precio,stock,fven) VALUES (DEFAULT,'$nom','$pre','$stk','$fven')";
        /*Guardo el resultado de la consulta en */
        $res=pg_query($conex,$query);

        if($res){
            ?>
                <h3>Ingresó correctamente</h3>
            <?php
        }

        /*Vuelvo al menu inicial */
        header("location:ingresarProductos.php");

    }
?>