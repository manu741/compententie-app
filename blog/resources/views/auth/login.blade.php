@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full bg-white p-6 dark:bg-gray-700">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif
                <main class="justify-center mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-4xl mb-8 md:text-4xl">
                            <span class="lg:text-center block text-black dark:text-white xl:inline mb-200">Inloggen</span>
                        </h1>
                        <span  class="mt-3 mb-16 text-base text-gray-500 dark:text-white  sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 mb-16">
                            Dit is een applicatie van de HU door de Codeerberen. Et has minim elitr entellegat. Mea aeterno eleigend antiopam ad.
                        </span>
                    </div>
                </main>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="justify-center flex mb-2 mt-16 text-gray-500 dark:text-white">
                    <h1 class="text-1xl tracking-tight font-extrabold text-gray-900 sm:text-1xl mb-4 md:text-1xl">
                        <span class="lg:text-center block text-black dark:text-white xl:inline mb-200">E-mail</span>
                    </h1>
                </div>
                <div class=" flex justify-center">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="someone@example.com" class="bg-gray-100 border-2 w-3/12 p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm flex justify-center">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="justify-center flex text dark:text-white">
                    <div class="justify-center flex mb-2 mt-6 text-gray-500 dark:text-white">
                        <h1 class="text-1xl tracking-tight font-extrabold text-gray-900 sm:text-1xl mb-2 md:text-1xl">
                            <span class="lg:text-center block text-black dark:text-white xl:inline mb-200">Wachtwoord</span>
                        </h1>
                    </div>
                </div>

                <div class="mb-4 flex justify-center">

                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Wachtwoord" class="bg-gray-100 border-2 w-3/12 p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white mt-4 px-4 py-3 rounded font-medium w-2/12 flex dark:bg-green-400 justify-center ">Login</button>
                </div>
            </form>
        </div>
    </div>
    <svg class="bg-gray-100 dark:bg-gray-600" width="full" height="full" viewBox="0 0 2200 71" fill="rgb(55, 65, 81)" xmlns="http://www.w3.org/2000/svg" >
        <path d="M2200 0L0 71V0H2200Z" fill=""/>
    </svg>
@endsection
