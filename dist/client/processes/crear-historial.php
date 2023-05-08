<?php
// Hacer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweet_taste";



session_start();

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$conn->query("INSERT INTO historial (fecha) VALUES (NOW())");

$idHistorial = $conn->insert_id;


foreach($_SESSION['productos'] as $producto){
    $idProducto = $producto['id_producto'];
    $query = "INSERT INTO historial_producto (id_historial, id_producto) VALUES ($idHistorial, $idProducto)";
    $conn->query($query);
}


$conn->query("DELETE FROM carrito");
// session_destroy();

header('Location: ../views/productos.php');



?>
