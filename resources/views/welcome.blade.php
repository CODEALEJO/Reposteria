<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reposteria - Pastelería</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(10px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.5s ease-out;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <header class="bg-blue-100 py-4">
        <nav class="container mx-auto px-4 flex justify-between items-center">
            <!-- Título a la izquierda -->
            <a href="#" class="text-2xl font-bold text-blue-600">Reposteria </a>

            <!-- Enlaces de Login y Register a la derecha -->
            <div class="ml-auto flex space-x-4">
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-blue-400 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-blue-600">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-blue-400 dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white text-blue-600">
                    Register
                </a>
            </div>
        </nav>
    </header>

    <main class="flex-grow">
        <section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center">
            <div class="absolute inset-0"></div>
            <div class="relative z-10 text-center text-white">
                <h1 class="text-5xl font-bold mb-4 animate-fade-in-down text-blue-600">Bienvenidos a la Reposteria de Clauida</h1>
                <a href="#"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded animate-bounce">
                    Ver Nuestros Productos
                </a>
            </div>
        </section>

        <section class="py-16 bg-blue-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12 text-blue-600">Nuestros Productos Destacados</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <img src="https://yayaya.com.ec/wp-content/uploads/2021/10/Torta-de-Chocolate.jpg"
                            alt="Pastel de Chocolate" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-blue-600">Pastel de Chocolate</h3>
                        <p class="text-gray-600">Delicioso pastel de chocolate con ganache y fresas frescas.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <img src="https://img.freepik.com/fotos-premium/cupcakes-variados-soporte-blanco_875825-36440.jpg"
                            alt="Cupcakes Variados" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-blue-600">Cupcakes Variados</h3>
                        <p class="text-gray-600">Surtido de cupcakes con diferentes sabores y decoraciones.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <img src="https://lomaculinaria.com/wp-content/uploads/2022/02/Tarta-de-frutas-frescas-Culinary-Hill-1200x800-2.jpg"
                            alt="Tarta de Frutas" class="w-full h-48 object-cover rounded-t-lg mb-4">
                        <h3 class="text-xl font-semibold mb-2 text-blue-600">Tarta de Frutas</h3>
                        <p class="text-gray-600">Tarta fresca con una selección de frutas de temporada.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-200 py-8">
        <div class="container mx-auto px-4 flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-4 md:mb-0">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Reposteria</h3>
                <p class="text-blue-800">Endulzando tus momentos especiales desde 2023</p>
            </div>
            <div class="w-full md:w-1/3 mb-4 md:mb-0">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Contáctanos</h3>
                <ul class="space-y-2">
                    <li class="flex items-center text-blue-800"><svg class="w-4 h-4 mr-2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg> +1 234 567 890</li>
                    <li class="flex items-center text-blue-800"><svg class="w-4 h-4 mr-2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg> Calle Dulce 123, Ciudad Azúcar</li>
                    <li class="flex items-center text-blue-800"><svg class="w-4 h-4 mr-2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4a1 1 0 001 1h3m10 0h-3a1 1 0 01-1-1V3M5 14h14a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6a1 1 0 011-1z">
                            </path>
                        </svg> info@reposteria.com</li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>
