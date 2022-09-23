<?php
$servername ="localhost";
$username = "root";
$password = "";

//creando la conexion
$conn = new mysqli($servername, $username, $password);

//Verificando la conexión
if ($conn->connect_error){
    die("Falló de la conexión: "  .$conn->connect_error);

}
echo "Conexión correcta";
?> 