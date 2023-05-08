<?php

// Hacer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweet_taste";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
    $sql = "SELECT * FROM historial_producto INNER JOIN products ON historial_producto.id_producto = products.id";
    $resultado = $conn->query($sql);
    $misProductos = [];


    if ($resultado && $resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $misProductos[] = $fila;
        }
    } else {
        echo "";    

}

?>