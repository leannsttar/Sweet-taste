<?php
include "../../config/db.php";
$conexionBD = BD::crearInstancia();

$productos = mysqli_query($conexionBD, "Select * from categorias");
$productos = mysqli_fetch_all($productos);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $img = $_POST["imagen"];
  $Precio = $_POST["Precio"];
  $Cantidad = $_POST["cantidad"];
  $categoria = intval($_POST["categoria"]);
  $sql = "Insert into products (nombre, descripcion, imagen, Cantidad, Precio, IDcategoria) VALUES ('$nombre', '$Descripcion', $Cantidad, $Precio, $categoria)";

  mysqli_query($conexionBD, $sql);
  echo "<script>alert('Producto agregado!');  window.location.href = '../../admin/views/productos_admin.php' </script>";
 
}
?>