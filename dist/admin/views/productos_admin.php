<?php
include "../../config/db.php";
$conexionBD = BD::crearInstancia();

// $misproductos = mysqli_query($conexionBD, "Select * from productos");
// $productosdp = [];

// while ($pasteles = mysqli_fetch_assoc($misproductos)){
//     $productosdp[] = $pasteles;
// }


//abajo un foreach, para mostrar las cards y los productos disponibles :D (cuando ya te terminado todo)
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
                <div class="flex items-center space-x-3">
                    <p class="text-2xl">Administrador</p>
                    <img src="../images/user.svg" alt="">
                </div>
            </div>
            <div class="flex w-full justify-between my-14 items-center">
                <div class="flex space-x-7 w-full">
                    <button class="font-semibold px-8 h-10 rounded-md border-[1px] border-[#FA8F88] text-lg hover:bg-[#FA8F88] transition-all ease-in-out duration-300">Pasteles</button>
                    <button class="font-semibold px-8 h-10 rounded-md border-[1px] border-[#FA8F88] text-lg hover:bg-[#FA8F88] transition-all ease-in-out duration-300">Panes</button>
                    <button class="font-semibold px-8 h-10 rounded-md border-[1px] border-[#FA8F88] text-lg hover:bg-[#FA8F88] transition-all ease-in-out duration-300">Galletas</button>
                </div>
                <div>
                    <input type="text" placeholder="Buscar" class="bg-[#fafafa] w-96 rounded-lg outline-none px-3 py-1">
                </div>
            </div>
            <div>
                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="mb-10 bg-black text-white font-semibold px-7 h-12 rounded-md text-lg hover:bg-white hover:text-black transition-all ease-in-out duration-300 " type="button" data-modal-toggle="authentication-modal">Agregar producto</button>
                <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="bg-white rounded-lg shadow relative dark:bg-[#000]">
                            <div class="flex justify-end p-2">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                            </div>
                            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Agregar producto</h3>
                                <div>
                                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Nombre</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nombre del producto" required="">
                                </div>
                                <div>
                                    <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Precio</label>
                                    <input type="password" name="password" id="password" placeholder="$20.00" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <div>
                                    <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Categoría</label>
                                    <select name="categoria" id="" class="w-full rounded-xl bg-gray-800 text-white h-11">
                                        <option value="pasteles" class="text-gray-900">Pasteles</option>
                                        <option value="panes">Panes</option>
                                        <option value="galletas">Galletas</option>
                                    </select>
                                </div>
                                <button type="submit" class="w-full text-white bg-[#FA8F88] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#FA8F88] dark:hover:bg-[#FF5146] dark:focus:ring-blue-800">Agregar producto</button>
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="space-y-10">
                    <div class="flex items-center justify-between border-b-4 pb-4">
                        <div class="flex items-center gap-x-16">
                            <p class="text-3xl font-bold">1</p>
                            <img src="../../client/images/chococake.png" alt="" class="w-20 h-20 object-cover">
                            <p class="text-3xl font-bold mr-52">Pastel choco</p>
                            <p class="text-3xl text-[#666666] font-bold">$0.50</p>
                        </div>
                        <div class="flex items-center gap-x-10">
                            <button data-hs-overlay="#hs-focus-management-modal" type="button"><img src="../images/edit.svg" alt=""></button>
                            <div id="hs-focus-management-modal" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                  <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                      <h3 class="font-bold text-gray-800 dark:text-white">
                                        Modal title
                                      </h3>
                                      <button type="button" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-focus-management-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                        </svg>
                                      </button>
                                    </div>
                                    <div class="p-4 overflow-y-auto">
                                      <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                                      <input type="email" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="you@site.com" autofocus>
                                    </div>
                                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                      <button type="button" class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" data-hs-overlay="#hs-focus-management-modal">
                                        Close
                                      </button>
                                      <a class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                                        Save changes
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              


                            <button id="deleteButton" data-modal-toggle="deleteModal" type="button"><img src="../images/delete.svg" alt=""></button>
                            <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto ">
                                    <!-- Modal content -->
                                    <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                                        <div class="flex justify-center items-center space-x-4">
                                            <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                No, cancel
                                            </button>
                                            <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-red-600 rounded-lg border border-gray-200 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-red-600 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600">
                                                Yes, sure
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script>
    </script>
</body>
</html>