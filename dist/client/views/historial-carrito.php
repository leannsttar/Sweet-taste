<?php

// Hacer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweet_taste";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$sql = "SELECT * FROM carrito INNER JOIN products ON carrito.id_producto=products.id";
$resultado = $conn->query($sql);
$misProductos = [];


// Cerrar la conexión
$conn->close();


?>