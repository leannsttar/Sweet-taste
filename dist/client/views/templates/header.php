
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
<body class="flex">
    <div class="h-screen w-[13%] flex justify-center items-center">
        <?php   
        session_start();

        if (isset($_SESSION['usuario'])) { ?>
            <div class="flex flex-col bg-black text-white pt-4 justify-center items-center rounded-3xl fixed">
                <div class="py-7 w-full flex justify-center"><img src="../images/lido_logo.png" alt="" class="w-32"></div>
                <a href="./index.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/Home.svg" alt=""></div></a>
                <a href="./productos.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/menu.svg" alt=""></div></a>
                <a href="./carrito.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/cartt.svg" alt=""></div></a>
                <a href="./historial.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] rounded-b-3xl py-11 w-full flex justify-center"><img src="../images/historial.png" alt=""></div></a>
                <a href="../processes/close-session.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center rounded-b-3xl cursor-pointer"><img src="../images/signout.svg" alt=""></div>
                </div></a>
        <?php } else { ?>
            <div class="flex flex-col bg-black text-white pt-4 justify-center items-center rounded-3xl fixed">
                <div class="py-7 w-full flex justify-center"><img src="../images/lido_logo.png" alt="" class="w-32"></div>
                <a href="./index.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/Home.svg" alt=""></div></a>
                <a href="./productos.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/menu.svg" alt=""></div></a>
                <a href="./form-login.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/cartt.svg" alt=""></div></a>
                <a href="./form-login.php" class="w-full h-full"><div class="hover:bg-[#FA8F88] rounded-b-3xl py-11 w-full flex justify-center"><img src="../images/historial.png" alt=""></div></a>
            </div>
        <?php } ?>
    </div>