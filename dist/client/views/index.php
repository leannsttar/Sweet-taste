<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../output.css" />
    <title>Inicio</title>
  </head>
  <body>
    <section>
        <!-- <div id="controls-carousel" class="relative w-full " data-carousel="static">
       
            <div class="relative h-screen overflow-hidden">

                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="../images/bg3_index.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <div class="duration-700 ease-in-out" data-carousel-item="active">
                    <img src="../images/bg2_index.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
             
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="../images/bg_index.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white dark:bg-gray-800/30 group-hover:bg-white dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-10 h-10 text-white dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-10 h-10 text-white dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div> -->
        
      <div class="w-screen h-screen flex overflow-hidden">
            <img src="../images/lido_logo.png" alt="" class="absolute w-48 h-24 m-3">
            <a href="./form-login.php"> <button class="bg-white absolute right-14 top-10 pt-1.5 pb-1.5 pl-4 pr-4 font-semibold rounded-md text-lg hover:bg-black hover:text-white transition-all ease-in-out duration-300">Iniciar sesión</button>
            </a>
            <div class="h-screen w-screen bg-index1 bg-cover flex justify-center items-center">
                <div class="absolute flex flex-col items-center space-y-12 mt-10">
                    <h2 class="text-white text-center text-7xl font-[400]">Bienvenido a Pan Lido</h2>
                    <span class="text-white text-3xl text-center font-light pb-12">Disfruta de los sabores tradicionales en cada bocado con nuestros <br> panes recién horneados.</span>
                    <a href="./productos.php"><button class="bg-white text-2xl w-52 h-16 rounded-full hover:bg-[#FF5146] hover:text-white transition-all ease-in-out duration-300">Ver productos</button></a>
                </div>
            </div>
        </div>
    </section>
    <script>
        import { Carousel, initTE } from "tw-elements";

        initTE({ Carousel });

    </script>
  </body>
</html>
