@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full bg-white dark:bg-gray-600 p-6">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

                <div class="flex justify-center">
                    <div class="w-8/12 flex justify-center rounded-lg">
                        <div class="relative overflow-hidden">
                            <div class="relative z-10 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                                <main class="justify-center mt-10 mx-auto px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                                    <div class="sm:text-center lg:text-center">
                                        <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                            <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Inloggen</span>
                                        </h1>
                                        <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                            Et has minim elitr intellegat. Mea aeterno eleifend antiopam ad.
                                        </span>
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>

            <form action="{{ route('login') }}" method="post">
                @csrf

                <p class="text-black dark:text-white text-center font-bold mb-4">E-mail</p>

                <div class="mb-4 text-center">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="" class="bg-gray-100 dark:bg-gray-500 dark:border-gray-400 border-2 w-3/12 p-4 focus:outline-none @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="text-black dark:text-white text-center font-bold mb-4">Wachtwoord</p>

                <div class="mb-4 text-center">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="" class="bg-gray-100 dark:bg-gray-500 dark:border-gray-400 border-2 w-3/12 p-4 focus:outline-none @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4 flex justify-center">
                    <div class="dark:text-white">
                        <input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 text-white dark:bg-green-400 px-4 py-3 mb-10 rounded font-medium w-2/12">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
