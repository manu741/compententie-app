@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

            <div style='border-bottom: 2px solid #eaeaea'>
                <ul class='flex cursor-pointer'>
                    <li class='py-2 px-6 bg-white rounded-t-lg' data-tab-target="#personal_data">Gegevens</li>
                    <li class='py-2 px-6 bg-white rounded-t-lg tab text-gray-500 bg-gray-200' data-tab-target="#study">Opleiding</li>
                    <li class='py-2 px-6 bg-white rounded-t-lg tab text-gray-500 bg-gray-200' data-tab-target="#pop">POP</li>
                </ul>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2 active" id="personal_data" data-tab-content>
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
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email adres</label>
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

            <div class="mt-5 md:mt-0 md:col-span-2" id="study" data-tab-content>
                <form action="{{ route('settings') }}" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-5 gap-5">

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="your_study" class="block text-sm font-medium text-gray-700">Is dit jouw opleiding?</label>
                                    <select id="your_study" name="your_study" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('your_study') border-red-500 @enderror">
                                        <option disabled selected value> -- Kies één van de opties -- </option>
                                        <option value="Ja">Ja</option>
                                        <option value="Nee">Nee</option>
                                    </select>

                                    @error('your_study')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <div class="col-span-3 sm:col-span-3">
                                    <label for="study_type" class="block text-sm font-medium text-gray-700">Type opleiding</label>
                                    <select id="study_type" name="study_type" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('study_type') border-red-500 @enderror">
                                        <option value="Associate degree">Associate degree</option>
                                        <option value="Bachelor" selected="selected">Bachelor</option>
                                    </select>

                                    @error('study_type')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="pop_unit" class="block text-sm font-medium text-gray-700">POP-cylcus eenheid</label>
                                    <select id="pop_unit" name="pop_unit" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('pop_unit') border-red-500 @enderror">
                                        <option value="Periode">Periode (blok)</option>
                                        <option value="Semester" selected="selected">Semester</option>
                                        <option value="Jaar">Jaar</option>
                                    </select>

                                    @error('pop_unit')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="study_name" class="block text-sm font-medium text-gray-700">Naam van opleiding</label>
                                    <input value="{{ old('study_name')  }}" type="text"  placeholder="Opleiding..." name="study_name" id="firstname" autocomplete="given-name" class=" p-1.5 px-3 border-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('study_name') border-red-500 @enderror">

                                    @error('study_name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="niveau_jaar1" class="block text-sm font-medium text-gray-700">Niveau-eis einde jaar 1</label>
                                    <select id="niveau_jaar1" name="niveau_jaar1" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('niveau_jaar1') border-red-500 @enderror">
                                        <option value="level1" selected="selected">1</option>
                                        <option value="level2">2</option>
                                        <option value="level3">3</option>
                                    </select>

                                    @error('niveau_jaar1')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="niveau_jaar2" class="block text-sm font-medium text-gray-700">Niveau-eis einde jaar 2</label>
                                    <select id="niveau_jaar2" name="niveau_jaar2" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('niveau_jaar2') border-red-500 @enderror">
                                        <option value="level1" selected="selected">1</option>
                                        <option value="level2">2</option>
                                        <option value="level3">3</option>
                                    </select>

                                    @error('niveau_jaar2')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="niveau_jaar3" class="block text-sm font-medium text-gray-700">Niveau-eis einde jaar 3</label>
                                    <select id="niveau_jaar3" name="niveau_jaar3" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('niveau_jaar3') border-red-500 @enderror">
                                        <option value="level1" selected="selected">1</option>
                                        <option value="level2">2</option>
                                        <option value="level3">3</option>
                                    </select>

                                    @error('niveau_jaar3')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="niveau_jaar4" class="block text-sm font-medium text-gray-700">Niveau-eis einde jaar 4</label>
                                    <select id="niveau_jaar4" name="niveau_jaar4" class=" mt-1 block w-full py-2 px-3 border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-1.5 px-3 border-2  @error('niveau_jaar4') border-red-500 @enderror">
                                        <option value="level1" selected="selected">1</option>
                                        <option value="level2">2</option>
                                        <option value="level3">3</option>
                                    </select>

                                    @error('niveau_jaar4')
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

            <div class="mt-5 md:mt-0 md:col-span-2" id="pop" data-tab-content>

                <p>POP cycli | Periode | Afgesloten</p>
                <p>Eerste    : dropdown | checkbox</p>



            </div>



        </div>
    </div>

    <script>
        const tabs = document.querySelectorAll('[data-tab-target]');
        const tabContents = document.querySelectorAll('[data-tab-content]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget)
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active')
                })
                tabs.forEach(tab => {
                    tab.classList.add('text-gray-500')
                    tab.classList.add('bg-gray-200')
                })
                tab.classList.remove('bg-gray-200')
                tab.classList.remove('text-gray-500')
                target.classList.add('active')
            })
        })
    </script>

    <style>
        [data-tab-content] {
            display: none;
        }

        .active[data-tab-content] {
            display: block;
        }
    </style>
@endsection
