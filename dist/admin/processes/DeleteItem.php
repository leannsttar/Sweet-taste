<?php

include "../../config/db.php";
$conexionBD = BD::crearInstancia();

$IDproducto = intval($_GET['ID']);
$miProducto = mysqli_query($conexionBD, "Select * from productos where IDproducto = $IDproducto");
$miProducto = mysqli_fetch_assoc($miProducto);
$productos = mysqli_fetch_all($productos);

  $sql = "DELETE FROM products WHERE id = $IDproducto";
  mysqli_query($conexionBD, $sql);
  echo "<script>alert('Producto eliminado!');  window.location.href = '../../admin/views/productos_admin.php'</script>";


?>