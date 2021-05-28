@extends('layouts.app')

@section('content')

    @auth

        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <div class="mt-5 md:mt-0 md:col-span-2 active" id="personal_data" data-tab-content>
                    <form action="{{ route('profile') }}" method="POST">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-5 gap-5">

                                    <div class="col-span-5 sm:col-span-3 lg:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Voornaam</label>
                                        <div>
                                            {{ auth()->user()->firstname }}
                                        </div>
                                    </div>

                                    <div class="col-span-5 sm:col-span-3 lg:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Achternaam</label>
                                        <div>
                                            {{ auth()->user()->lastname }}
                                        </div>
                                    </div>

                                    <div class="col-span-5 sm:col-span-3 lg:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Studentnummer</label>
                                        <div>
                                            {{ auth()->user()->studentnr }}
                                        </div>
                                    </div>

                                    <div class="col-span-5 sm:col-span-3 lg:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email adres</label>
                                        <div>
                                            {{ auth()->user()->email }}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord aanpassen</label>
                                <input type="password" name="password" id="password" class=" p-1.5 px-3 border-2  mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') border-red-500 @enderror">
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord herhalen</label>
                                <input type="password" name="password_confirmation" id="password" class=" p-1.5 px-3 border-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') border-red-500 @enderror">
                                @error('password')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

{{--                            <div class="col-span-5 sm:col-span-3">--}}
{{--                                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord aanpassen</label>--}}
{{--                                <input type="password" name="password" id="password" class=" p-1.5 px-3 border-2  mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') border-red-500 @enderror">--}}
{{--                                @error('password')--}}
{{--                                <div class="text-red-500 mt-2 text-sm">--}}
{{--                                    {{ $message }}--}}
{{--                                </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="col-span-5 sm:col-span-3">--}}
{{--                                <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord herhalen</label>--}}
{{--                                <input type="password" name="password_confirmation" id="password" class=" p-1.5 px-3 border-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('password') border-red-500 @enderror">--}}
{{--                                @error('password')--}}
{{--                                <div class="text-red-500 mt-2 text-sm">--}}
{{--                                    {{ $message }}--}}
{{--                                </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

                            <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Wachtwoord updaten
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endauth
@endsection
