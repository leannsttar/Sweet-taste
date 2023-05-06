<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../output.css">
</head>
<body class="flex">
    <div class="h-screen w-[13%] flex justify-center items-center">
        <?php   
        if (isset($_SESSION['usuario'])) { ?>
            <div class="flex flex-col bg-black text-white pt-4 justify-center items-center rounded-3xl fixed">
                <div class="py-7 w-full flex justify-center"><img src="../images/lido_logo.png" alt="" class="w-32"></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/Home.svg" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/menu.svg" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/cartt.svg" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/historial.png" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center rounded-b-3xl"><img src="../images/signout.svg" alt=""></div>
            </div>
        <?php } else { ?>
            <div class="flex flex-col bg-black text-white pt-4 justify-center items-center rounded-3xl fixed">
                <div class="py-7 w-full flex justify-center"><img src="../images/lido_logo.png" alt="" class="w-32"></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/Home.svg" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/menu.svg" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/cartt.svg" alt=""></div>
                <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/historial.png" alt=""></div>

            </div>
        <?php } ?>
    </div>