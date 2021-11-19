<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
    @livewireStyles
</head>
<body>

    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a class="flex items-center py-4 px-2" href="#">
                            <img alt="Logo" class="h-8 w-8 mr-2" src="{{ asset('pngwing.com.png') }}" />
                            <span class="font-semibold text-gray-500 text-lg">
                            </span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        @if (Route::is('home'))
                            <a class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold"
                            href="{{ route('home') }}">
                                Home
                            </a>
                        @else
                            <a class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                            href="{{ route('home') }}">
                                Home
                            </a>
                        @endif
                        @if (Route::is('company'))
                            <a class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold"
                            href="{{ route('company') }}">
                                Empresas
                            </a>
                        @else
                            <a class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                            href="{{ route('company') }}">
                                Empresas
                            </a>
                        @endif
                        @if (Route::is('employee'))
                            <a class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold"
                            href="{{ route('employee') }}">
                                Funcionários
                            </a>
                        @else
                            <a class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300"
                            href="{{ route('employee') }}">
                                Funcionários
                            </a>
                        @endif
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3">
                    <a class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-green-500 hover:text-white transition duration-300"
                    href>
                        Log In
                    </a>
                    <a class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300"
                    href>
                        Sign Up
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-green-500"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            x-show="!showMenu">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class>
                @if (Route::is('home'))
                    <li class="active">
                        <a class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold"
                        href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                @else
                    <li>
                        <a class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300"
                        href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                @endif
                @if (Route::is('company'))
                    <li class="active">
                        <a class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold"
                        href="{{ route('company') }}">
                            Empresas
                        </a>
                    </li>
                @else
                    <li>
                        <a class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300"
                        href="{{ route('company') }}">
                            Empresas
                        </a>
                    </li>
                @endif
                @if (Route::is('employee'))
                    <li class="active">
                        <a class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold"
                        href="{{ route('employee') }}">
                            Funcionários
                        </a>
                    </li>
                @else
                    <li>
                        <a class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300"
                        href="{{ route('employee') }}">
                            Funcionários
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>

    @yield('content')

    @livewireScripts
</body>
</html>