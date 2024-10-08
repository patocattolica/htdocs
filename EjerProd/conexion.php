<?php
//Asigno a las siguientes variables los datos necesarios para generar la conexion
$host="host=localhost";
$port="port=5432";
$dbname="dbname=postgres";
$user="user=postgres";
$password="password=1234";

//realizo la conexion
$conex=pg_connect("$host $port $dbname $user $password");
?>