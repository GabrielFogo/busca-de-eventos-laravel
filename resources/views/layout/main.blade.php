<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="min-h-screen flex flex-col">
<header class="z-30">
    <nav class="p-5 flex justify-between items-center bg-gray-700 text-white border-b border-gray-200 ">
        <a class="text-3xl leading-none" href="/">
            Agenda de eventos
        </a>
        <div class="md:hidden">
            <button class="navbar-burger flex items-center text-gray-400 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="hidden md:flex">
            <ul class="hidden md:flex">
                <li class="px-4"><a class="text-gray-400 hover:text-blue-500" href="/">Eventos</a></li>
                <li class="px-4"><a class="text-gray-400 hover:text-blue-500" href="/events/create">Criar Eventos</a></li>
                <li class="px-4"><a class="text-gray-400 hover:text-blue-500" href="#">Entrar</a></li>
                <li class="px-4"><a class="text-gray-400 hover:text-blue-500" href="#">Cadastrar</a></li>
            </ul>
        </ul>
    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-700 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-gray-700 text-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="text-2xl leading-none" href="/">
                    Agenda de eventos
                </a>
                <button class="navbar-close ms-2">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="/">Eventos</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="/events/create">Criar Eventos</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="#">Entrar</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                           href="#">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
@if(session('msg'))
    <div class="w-full bg-green-200 text-green-500 p-3 flex justify-between items-center" id="msg-success">
       <div>
           {{ session('msg') }}
       </div>
        <div class="flex ps-[300px]">
            <button onclick="closeBox('msg-success')">X</button>
        </div>
    </div>
@endif
<main class="px-32 py-5 flex-1">
    @yield('content')
</main>

<footer class="text-center bg-gray-700 text-white py-3">
    <div class="container mx-auto">
        <p class="mb-0">Agenda de eventos &copy; 2024</p>
    </div>
</footer>

<script src="js/script.js"></script>
</body>
</html>
