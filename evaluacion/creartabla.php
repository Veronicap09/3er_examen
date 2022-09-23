<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="examen" ;
$mi_var= $_POST["nombrebd"];

$tabla= $_POST["tabla"];
$d1= $_POST["d1"];
$d2= $_POST["d2"];
$d3= $_POST["d3"];
$d4= $_POST["d4"];

// Creando la conexion
$conn = new mysqli($servername, $username, $password,$mi_var);

// Verificando la conexion
if ($conn->connect_error) {
  die("Falló la conexión: " . $conn->connect_error().')' .mysqlo_connect_error());
}
echo "Conexión correcta";

// SQL para crear las tablas
$sql = "CREATE TABLE $tabla(
    id_p INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ci INT(6) NOT NULL,
    nombre VARCHAR(12),
    apellidoP VARCHAR(12)
)";



if ($conn->query($sql) === TRUE){
    echo "Base de datos creada correctamente";
}else{
    echo "Error al crear: "  .$conn->error;
}

$conn->close();
?>