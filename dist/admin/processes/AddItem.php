<?php


include "../../config/db.php";
$conexionBD = BD::crearInstancia();

$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

if ($accion == 'agregar') {
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  $sql = "INSERT INTO products (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)";
  $consulta = $conexionBD->prepare($sql);
  $consulta->bindParam(':nombre', $nombre);
  $consulta->bindParam(':descripcion', $descripcion);
  $consulta->bindParam(':precio', $precio);
  $consulta->execute();
  echo "<script>alert('Producto agregado!');  window.location.href = '../../admin/views/productos_admin.php' </script>";
 
}

$sql = "SELECT * FROM `products`";
$productos = $conexionBD->query($sql);
$allproducts = $productos->fetchAll();


?>