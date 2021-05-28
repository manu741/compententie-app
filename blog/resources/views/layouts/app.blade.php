<!DOCTYPE html>
<html lang="en" class="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <title>Persoonlijk Ontwikkelings Plan</title>

    </head>

    <body class="bg-white">

        <nav class=" bg-gray-100 dark:bg-gray-700 mb-5">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="#" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                                @auth
                                        <a href="#" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">POP</a>
                                @endauth
                                @auth
                                    <a href="#" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reflecties</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <label class="switch">
                                <input id="switchTheme" type="checkbox">
                                <span class="slider round bg-gray-600"></span>
                            </label>
                            @auth
                                <div class="ml-3 relative">
                                    <div class="ml-10">
                                        <button onclick="showDropdown()" class="max-w-xs bg-gray-700 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white" id="user-menu" aria-haspopup="true">
                                            <span class="sr-only">Open gebruiker menu</span>
                                            <img class="h-8 w-8 rounded-full" src="https://e-cdn-images.dzcdn.net/images/artist/ef0de2a0948a621339447019db3e52b0/264x264-000000-80-0-0.jpg" alt="">
                                        </button>
                                    </div>


                                    <div id="site-overlay" style="display:none; z-index: 1;" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                                        <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profiel</a>

                                        <a href="{{route('students')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Studenten</a>

                                        <form action="{{ route('logout') }}" method="post" class="inline">
                                            @csrf
                                            <button type="submit" class="text-left block w-full mr-0 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" role="menuitem">
                                                Uitloggen
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                @endauth
                            @guest
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <a href="{{ route('login')}}" style="transition: background-color .15s ease" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium">Inloggen</a>

                                    <a href="{{ route('register')}}" style="transition: background-color .15s ease" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-blue-700 dark:hover:text-white dark:bg-gray-700 bg-blue-600 text-white px-3 py-2 rounded-md text-sm font-medium">Registreren</a>
                                </div>
                            @endguest

                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden" style="align-items: center;">
                        <!-- Mobile menu button -->
                        <label class="switch">
                            <input id="switchTheme1" type="checkbox">
                            <span class="slider round bg-gray-600"></span>
                        </label>

                        <button type="button" onclick="mobileDropdown()" class="ml-10 dark:bg-gray-600 hover:bg-gray-200 inline-flex items-center justify-center p-2 rounded-md dark:text-gray-400 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-800 focus:ring-gray-300" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open hoofdmenu</span>

                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>


            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden"  style="display:none" id="menu-mobile">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>

                    <a href="#" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>

                    <div class="border-t dark:border-gray-500">
                        @guest
                                <a href="{{ route('login')}}" style="transition: all .15s ease; margin-top:4px;" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium">Inloggen</a>

                                <a href="{{ route('register')}}" style="transition: all .15s ease; margin-top:4px;" class="dark:text-gray-300 dark:hover:bg-gray-600 hover:bg-gray-200 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium">Registreren</a>
                        @endguest
                        @auth
                            <div style="margin-top:4px; " class="flex items-center px-3 py-2 ">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="https://e-cdn-images.dzcdn.net/images/artist/ef0de2a0948a621339447019db3e52b0/264x264-000000-80-0-0.jpg" alt="">
                                </div>
                                <div class="ml-3">
                                    <div class="text-base font-medium leading-none dark:text-white">Voornaam Achternaam</div>
                                    <div class="text-sm mt-1 font-medium leading-none dark:text-gray-400">e-mail</div>
                                </div>
                            </div>
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 hover:bg-gray-200 ">Instellingen</a>

                                <form action="{{ route('logout') }}" method="get" class="">
                                    @csrf
                                    <button type="submit" class="w-full text-left block px-3 py-2 rounded-md text-base font-medium dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 hover:bg-gray-200 " role="menuitem">
                                        Uitloggen
                                    </button>
                                </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')



    </body>

    <script>

        if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.querySelector('html').classList.add('dark')
        } else if (localStorage.theme === 'dark') {
            document.querySelector('html').classList.add('dark')
        }

        document.getElementById('switchTheme').addEventListener('click', function() {
            let htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme === 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme')
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
        });

        document.getElementById('switchTheme1').addEventListener('click', function() {
            let htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme === 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme')
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
        });


        function showDropdown() {
            var x = document.getElementById("site-overlay");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
                x.style.display = "none";
            }
        }

        function mobileDropdown() {
            var x = document.getElementById("menu-mobile");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

