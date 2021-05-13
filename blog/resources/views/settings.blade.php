@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

            <h2>Settings</h2>
            <div style='border-bottom: 2px solid #eaeaea'>
                <ul class='flex cursor-pointer'>
                    <li class='py-2 px-6 bg-white rounded-t-lg'>Gegevens</li>
                    <li class='py-2 px-6 bg-white rounded-t-lg text-gray-500 bg-gray-200'>Afgesloten</li>
                    <li class='py-2 px-6 bg-white rounded-t-lg text-gray-500 bg-gray-200'>Opleiding</li>
                </ul>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('settings') }}" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-5 gap-5">

                                <div class="col-span-5 sm:col-span-3 lg:col-span-2">
                                    <label for="firstname" class="block text-sm font-medium text-gray-700">Voornaam</label>
                                    <input value="{{ auth()->user()->firstname }}" type="text"  placeholder="Voornaam" name="firstname" id="firstname" autocomplete="given-name" class=" p-1.5 px-3 border-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('firstname') border-red-500 @enderror">

                                    @error('firstname')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-5 sm:col-span-3 lg:col-span-2">
                                    <label for="lastname" class="block text-sm font-medium text-gray-700">Achternaam</label>
                                    <input value="{{ auth()->user()->lastname }}" type="text" name="lastname" placeholder="Achternaam"  id="lastname" class="  p-1.5 px-3 border-2  mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('lastname') border-red-500 @enderror">
                                    @error('lastname')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-5 sm:col-span-3 lg:col-span-2">
                                    <label for="studentnr" class="block text-sm font-medium text-gray-700">studentnr</label>
                                    <input value="{{ auth()->user()->studentnr  }}" type="text" name="studentnr" placeholder="studentnr"  id="studentnr"  class=" p-1.5 px-3 border-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('studentnr') border-red-500 @enderror">
                                    @error('studentnr')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-5 sm:col-span-3 lg:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email adres*</label>
                                    <input value="{{ auth()->user()->email  }}" type="text" name="email" placeholder="E-mail adres"  id="email"  class=" p-1.5 px-3 border-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('email') border-red-500 @enderror">
                                    @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-left sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Gegevens aanppassen
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
