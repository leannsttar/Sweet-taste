<?php
include_once '../../config/db.php';
$conexionBD = BD::crearInstancia();

if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    
    if (isset($_POST['role'])) {
        $role = $_POST['role'];
    } else {
        $role = ''; // O proporciona un valor predeterminado adecuado en caso de que no se haya seleccionado ningún rol
    }

    $sql = $conexionBD->prepare('INSERT INTO users (nombre, correo, password, role) VALUES (:nombre, :correo, :password, "usuario")');
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':correo', $correo);
    $sql->bindParam(':password', $password);

    if ($sql->execute()) {
        echo "<script>alert('Registro exitoso')</script>";
        header('Location: ../views/form-login.php');

    } else {
        echo "<script>alert('Error al registrar')</script>";
    }
}


?>
