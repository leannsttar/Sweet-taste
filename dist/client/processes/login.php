<?php
session_start();
include_once '../../config/db.php';
$conexionBD = BD::crearInstancia();

if ($_POST) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // usuarios
    $sql = $conexionBD->prepare('SELECT * FROM users WHERE correo=:correo AND password=:password');
    $sql->bindParam(':correo', $correo);
    $sql->bindParam(':password', $password);
    $sql->execute();
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    // admini
    $sqlAdmin = $conexionBD->prepare('SELECT * FROM users WHERE correo=:correo AND password=:password');
    $sqlAdmin->bindParam(':correo', $correo);
    $sqlAdmin->bindParam(':password', $password);
    $sqlAdmin->execute();
    $admin = $sqlAdmin->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $_SESSION['usuario'] = $usuario['id'];
        header('Location: ../views/index.php');
    } elseif ($admin) {
        $_SESSION['admin'] = $admin['id'];
        header('Location: ../views/index-admin.php');
    } else {
        echo "<script>
        alert('Contraseña o usuario incorrecto :)');
        window.location.href = '';
        </script>";
    }
}
?>
