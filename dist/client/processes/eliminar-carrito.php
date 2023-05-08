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

$id = $_POST['Id'];
$sql = "DELETE FROM carrito WHERE id_carrito=$id";
$resultado = $conn->query($sql);
$misProductos = [];

header('Location: ../views/carrito.php');
// $conn->close();


?>