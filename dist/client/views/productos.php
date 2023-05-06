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
        <div class="flex flex-col bg-black text-white pt-4 justify-center items-center rounded-3xl fixed">
            <div class="py-7 w-full flex justify-center"><img src="../images/lido_logo.png" alt="" class="w-32"></div>
            <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/Home.svg" alt=""></div>
            <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/menu.svg" alt=""></div>
            <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/cartt.svg" alt=""></div>
            <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center"><img src="../images/historial.png" alt=""></div>
            <div class="hover:bg-[#FA8F88] py-11 w-full flex justify-center rounded-b-3xl"><img src="../images/signout.svg" alt=""></div>
        </div>
    </div>
    <div class="h-screen w-[87%] flex flex-col">
        <div class="w-[95%] flex flex-col mt-[55px]">
            <div class="flex justify-between w-full">
                <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">PRODUCTOS</p>
                <a href="../views/form-login.html"><button class="bg-black text-white font-semibold px-4 h-10 rounded-md text-lg hover:bg-white hover:text-black transition-all ease-in-out duration-300">Iniciar sesión</button></a>
            </div>
            <div class="flex w-full justify-between my-14 items-center">
                <div class="flex space-x-7 w-full">
                    <button class="font-semibold px-8 h-10 rounded-md border-[1px] border-[#FA8F88] text-lg hover:bg-[#FA8F88] transition-all ease-in-out duration-300" data-categoria="pasteles">Pasteles</button>
                    <button class="font-semibold px-8 h-10 rounded-md border-[1px] border-[#FA8F88] text-lg hover:bg-[#FA8F88] transition-all ease-in-out duration-300" data-categoria="panes">Panes</button>
                    <button class="font-semibold px-8 h-10 rounded-md border-[1px] border-[#FA8F88] text-lg hover:bg-[#FA8F88] transition-all ease-in-out duration-300" data-categoria="galletas">Galletas</button>
                </div>
                <div>
                    <input type="text" id="search" placeholder="Buscar" class="bg-[#fafafa] w-96 rounded-lg outline-none px-3 py-1">
                

                    </div>
            </div>
            <div>
                <div class="p-3 border-[1px] shadow-xl rounded-xl w-64">
                    <img src="../images/chococake.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold">Pastel 1</p>
                        <p class="text-[#666666] font-light">Pastel de chocolate</p>
                        <p class="text-[#282424] text-4xl font-bold">$ 10.50</p>
                    </div>
                    <button class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 "><img src="../images/add_cart.png" alt="" class=""></button>
                </div>
            </div>
            <div>
                <div class="p-3 border-[1px] shadow-xl rounded-xl w-64">
                    <img src="../images/chococake.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold">Pastel 2</p>
                        <p class="text-[#666666] font-light">Pastel de chocolate</p>
                        <p class="text-[#282424] text-4xl font-bold">$ 12.75</p>
                    </div>
                    <button class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 "><img src="../images/add_cart.png" alt="" class=""></button>
                </div>
            </div>
            <div>
                <div class="p-3 border-[1px] shadow-xl rounded-xl w-64">
                    <img src="../images/chococake.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold">Pastel 3</p>
                        <p class="text-[#666666] font-light">Pastel de chocolate</p>
                        <p class="text-[#282424] text-4xl font-bold">$ 15.00</p>
                    </div>
                    <button class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 "><img src="../images/add_cart.png" alt="" class=""></button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../processes/js/buscador.js"></script>
</html>
