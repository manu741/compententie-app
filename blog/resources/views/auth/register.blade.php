@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-full bg-white dark:bg-gray-600 p-6">
            <div class="flex justify-center">
                <div class="w-8/12 flex justify-center rounded-lg">
                    <div class="relative overflow-hidden">
                        <div class="relative z-10 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                            <main class="justify-center mt-10 mx-auto px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                                <div class="sm:text-center lg:text-center">
                                    <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                        <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Registreren</span>
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
            <form action="{{ route('register') }}" method="post">
                @csrf

                <p class="text-black dark:text-white text-center font-bold mb-4">Naam:</p>
                <div class="mb-4 w-full text-center">
                    <label for="firstname" class="sr-only">Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Naam" class="dark:bg-gray-500  bg-gray-100 dark:border-gray-400 shadow w-4/12 border-2 p-4 focus:outline-none @error('firstname') border-red-500 @enderror" value="{{ old('firstname') }}">

                    @error('firstname')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="text-black dark:text-white text-center font-bold mb-4">Achternaam:</p>
                <div class="mb-4 w-full text-center">
                    <label for="lastname" class="sr-only">Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Achternaam" class="dark:bg-gray-500 bg-gray-100 dark:border-gray-400 shadow w-4/12 border-2 p-4 focus:outline-none @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">

                    @error('lastname')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <p class="text-black dark:text-white text-center font-bold mb-4">Studenten Nummer:</p>
                <div class="mb-4 w-full text-center">
                    <label for="studentnr" class="sr-only">Studentnr</label>
                    <input type="text" name="studentnr" id="studentnr" placeholder="1234567" class="dark:bg-gray-500 bg-gray-100 dark:border-gray-400 shadow w-4/12 border-2 p-4 focus:outline-none @error('studentnr') border-red-500 @enderror" value="{{ old('studentnr') }}">

                    @error('studentnr')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="text-black dark:text-white text-center font-bold mb-4">School E-mail:</p>
                <div class="mb-4 w-full text-center">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="example.example@student.hu.nl" class="dark:bg-gray-500 bg-gray-100 dark:text-white dark:border-gray-400 shadow w-4/12 border-2 p-4 focus:outline-none @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="text-black dark:text-white text-center font-bold mb-4">Wachtwoord</p>
                <div class="mb-4 w-full text-center">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="" class="dark:bg-gray-500 bg-gray-100 dark:border-gray-400 shadow w-4/12 border-2 p-4 focus:outline-none @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="text-black dark:text-white text-center font-bold mb-4">Wachtwoord Herhalen</p>
                <div class="mb-4 w-full flex justify-center">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="" placeholder="" class="dark:bg-gray-500 bg-gray-100 dark:border-gray-400 shadow w-4/12 border-2 w-4/12 p-4 mb-4 focus:outline-none @error('password_confirmation') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-2/12 dark:bg-green-400 bg-blue-500 text-white px-4 py-3 rounded font-medium">Register</button>
                </div>
            </form>
        </div>

    </div>
@endsection
