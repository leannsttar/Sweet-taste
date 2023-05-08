<?php
include_once '../../config/db.php';
$conexionBD = BD::crearInstancia();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        header('Location: form-login.php');
        exit();
    } else {
        echo "<script>alert('Error al registrar')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIDO - Yo de Lido no me olvido</title>
    <link rel="shortcut icon" href="../images/lido_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../output.css">
</head>
<body>
    <div class="flex">
        <div class="absolute w-3/5 h-screen bg-[#3D3D3D] bg-opacity-50 z-10"></div>
        <div class="w-3/5 h-screen flex flex-col justify-center items-center space-y-10 bg-signup bg-cover">
            <p class="text-7xl mr-28 ml-28 text-white z-20">El sabor de la tradición, en cada mordisco</p>
            <p class="text-3xl mr-28 ml-28 text-white z-20">Crea una cuenta gratuita y obtén acceso completo a todas las funciones de nuestra tienda online</p>
        </div>
        <div class="w-2/5 h-screen flex flex-col justify-center pl-28 pr-28">
            <div class="mb-7"><a href="./index.php"><img src="../images/lido_logo.png" alt="" class="w-36 h-18 -translate-x-4"></a></div>
            <div class="text-3xl font-bold mb-12">Regístrate</div>
            <form method="POST">
                <div class="flex flex-col space-y-8">
                    <div class="flex flex-col space-y-2">
                        <label for="" class="font-bold">Nombre*</label>
                        <input name="nombre" required type="text" placeholder="Ingresa tu nombre" class="p-4 rounded-md outline-none border-solid border-[1px] border-slate-400">
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="" class="font-bold">Email*</label>
                        <input name="correo" required type="text" placeholder="Ingresa tu email" class="p-4 rounded-md outline-none border-solid border-[1px] border-slate-400">
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="" class="font-bold">Contraseña*</label>
                        <input name="password" required type="password" placeholder="Crea una contraseña" class="p-4 rounded-md outline-none border-solid border-[1px] border-slate-400">
                        <p class="text-sm text-gray-500">Debe tener al menos 6 caracteres</p>
                    </div>

                    <div>
                        <button type="submit" class="bg-[#FF5146] p-4 w-full rounded-md border-[1px] border-[#FF5146] text-white hover:bg-white hover:text-[#FF5146] transition-all hover:ease-in-out duration-300">Crear cuenta</button>
                    </div>
                </div>
            </form>
            <div class="flex space-x-2 w-full justify-center mt-12 text-xl font-semibold">
                <p class="text-gray-400">¿Ya tienes una cuenta?</p>
                <a href="./form-login.php">
                    <p class="text-purple-500 cursor-pointer">Inicia sesión</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

