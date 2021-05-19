@extends('layouts.app')

@section('content')
    <div class="w-full h-full dark:bg-gray-600 font-bold text-black dark:text-white">
        <x-popmenu/>

        <div class="gradient dark:text-white min-h-screen flex items-center">
            <div class="container mx-auto p-4 flex flex-wrap items-center">
                <div class="w-full md:w-5/12 text-center p-4">
                    <img src="https://flipstore.withun.link/images/404.png" alt="Not Found" />
                </div>
                <div class="w-full md:w-7/12 text-center md:text-left p-4">
                    <div class="text-6xl font-medium">404</div>
                    <div class="text-xl md:text-3xl font-medium mb-4">
                        Oops. Deze pagina bestaat nog niet
                    </div>
                    <div class="text-lg mb-8">
                        Je hebt waarschijnlijk een typefout gemaakt, probeer het opnieuw.
                    </div>
                    <a href="{{ route('home')}}" class="border border-blue-400 dark:border-green-400   hover:border-blue-600 dark:hover:border-green-600 rounded py-2 px-3 text-blue-400 dark:text-green-400 hover:text-blue-600 dark:hover:text-green-600">Home</a>
                </div>
            </div>
        </div>
@endsection
