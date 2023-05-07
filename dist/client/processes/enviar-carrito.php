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

print_r($_POST);


//cantidad, precio, nombre
$idProducto = $_POST['Id'];

$conn->query("INSERT INTO carrito (id_producto, cantidad) VALUES($idProducto, 1)");
header('Location: ../views/carrito.php');



?>


