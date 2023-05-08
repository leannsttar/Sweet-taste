<?php
session_start();
include_once '../../config/db.php';
$conexionBD = BD::crearInstancia();

if ($_POST) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $sql = $conexionBD->prepare('SELECT * FROM users WHERE correo=:correo AND password=:password');
    $sql->bindParam(':correo', $correo);
    $sql->bindParam(':password', $password);
    $sql->execute();
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    //Admi
    $sqlAdmi = $conexionBD->prepare('SELECT * FROM admin WHERE correo=:correo AND password=:password');
    $sqlAdmi->bindParam(':correo', $correo);
    $sqlAdmi->bindParam(':password', $password);
    $sqlAdmi->execute();
    $Admi = $sqlAdmi->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        $_SESSION['usuario'] = $usuario['id'];
        header('Location:  ../views/index.php');
        exit();
    } else if ($Admi){
        $_SESSION['admi'] = $admin['id'];
        header ('Location: ../../admin/views/productos_admin.php');
    }
    else {
        echo "<script>
        alert('Contraseña o usuario incorrecto :)');
        window.location.href = '../views/form-login.php';
        </script>";
    }
}
?>
