@extends('layouts.app')

@section('content')

    <div class="w-full h-full bg-white dark:bg-gray-600 font-bold text-black dark:text-white">
        <x-popmenu/>

        <div class="flex justify-center bg-white dark:bg-gray-600">
            <div class="w-8/12 bg-white dark:bg-gray-600 rounded-lg">
                <div class="relative bg-white dark:bg-gray-600 overflow-hidden">
                    <div class="mx-auto">
                        <div class="relative z-10  bg-white dark:bg-gray-600 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                            </div>
                            <main class="justify-center mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                                <div class="sm:text-center lg:text-center">
                                    <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                        <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Data punt aanmaken</span>
                                    </h1>
                                    <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        Hier kun je een datapunt aanmaken.
                                    </span>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{ route('emptyDatapunt') }}" method="post">
            @csrf
            <div class="flex justify-center">
                <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded-b mb-4">
                <span class="flex mb-8 mt-8 ml-12">
                    Voeg een datapunt toe met de gewenste competentie in deze POP-Cyclus:
                </span>

                    <div class="mt-2 mb-2 ">
                        <span class="mr-8 ml-12">Competentie:</span>
                        <div class="relative inline-flex">
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select name="competentie" id="competentie_drop" class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:180px;">
                                <option value="0" disabled selected>Kies een optie...</option>
                                @foreach($competenties as $competentie)
                                    <option value="{{ $competentie->id }}">{{$competentie->competentie}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-2 mb-2">
                        <span class="mr-8 ml-12">Niveau: </span>
                        <div class="relative inline-flex">
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select name="niveau" id="niveau_drop" class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:180px;">
                                <option value="0" disabled selected>Kies competentie</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-2 mb-2 ">
                        <span class="mr-8 ml-12">Indicator:</span>
                        <div class="relative inline-flex">
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <div id="indicator_omschrijving">{{--Append vanuit javascript--}}</div>
                        </div>
                    </div>


                    <div class="flex mt-10 ml-12 mb-4">
                            <button type="submit" class="w-3/12 h-10 rounded-md flex items-center justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium text-white bg-blue-500 dark:bg-green-500 hover:bg-blue-700 dark:hover:bg-green-600 md:py-4 md:text-lg md:px-10">
                                Datapunt toevoegen
                            </button>


                        <a href="" class="w-3/12 h-10 rounded-md flex items-center justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium text-white bg-blue-500 dark:bg-green-500 hover:bg-blue-700 dark:hover:bg-green-600 md:py-4 md:text-lg md:px-10">
                            Datapunt verwijderen
                        </a>

                        <a href="" class="w-2/12 h-10 rounded-md flex items-center justify-center px-8 py-3 mt-2 mb-2 border border-transparent text-base font-medium text-blue-500 border-blue-500 dark:bg-gray-700 dark:text-green-400 dark:border-green-400 md:py-4 md:text-lg md:px-10">
                            Refresh
                        </a>
                    </div>
                </div>
            </div>
        </form>

        <div class="flex justify-center">
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded mb-4">

                <div class="flex flex-col ml-12 mr-12">
                    <div class="p-4 my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden sm:rounded-lg">
                                <span class="flex mb-8 mt-8">
                                    Opgenomen competenties en indicator in deze POP-Cyclus:
                                </span>

                                <table class="min-w-full mb-10 max-w-xl divide-y divide-gray-200 dark:divide-gray-500 border-gray-800">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Datapunt naam
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Aanmaak datum
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Onderwijs eenheid
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Competentie
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Niveau
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Indicator
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody class="bg-gray-100 dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-800">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Datapunt 1</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">18-05-2021</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">1 Jaar</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Samenwerking</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau 1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator naam</div>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Datapunt 1</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">18-05-2021</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">1 Jaar</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Samenwerking</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau 1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator naam</div>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Datapunt 1</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">18-05-2021</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">1 Jaar</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Samenwerking</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau 1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator naam</div>
                                        </td>
                                    </tbody>
                                </table>

                                <div x-data="{ showModal1: false, showModal2: false, showModal3: false }" :class="{'overflow-y-hidden': showModal1 || showModal2 || showModal3}" x-cloak>
                                    <button class="bg-blue-500 dark:bg-green-500 font-semibold text-white px-8 h-10 w-32 rounded hover:bg-blue-600 dark:hover:bg-green-600 focus:outline-none mt-2" @click="showModal1 = true">
                                        Details
                                    </button>
                                    <!-- Modal Reflecties -->
                                    <x-popupDatapunt/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <a href="" class="w-2/12 rounded-md flex justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium text-white bg-blue-500 dark:bg-green-500 hover:bg-blue-700 dark:hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                Opslaan
            </a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#competentie_drop').on('change', function () {
                $('#indicator_omschrijving').empty();
                let id = $(this).val();
                let niveau = $('#niveau_drop');
                $.ajax({
                    type: 'GET',
                    url: 'GetNiveausAgainstCompetentieDrop/' + id,
                    success: function (response) {
                        response = JSON.parse(response);
                        console.log(response);
                        niveau.empty();
                        niveau.append(`<option value="0" disabled selected>Kies een optie...</option>`);
                        response.forEach(element => {
                            niveau.append(`<option value="${element['id']}">${element['niveau']}</option>`);
                        });
                    }
                })
            })

            $('#niveau_drop').on('change', function () {
                let id = $(this).val();
                let indicator = $('#indicator_omschrijving');
                $.ajax({
                    type: 'GET',
                    url: 'GetIndicatorAgainstNiveau/' + id,
                    success: function (response) {
                        response = JSON.parse(response);
                        console.log(response);
                        indicator.empty();
                        indicator.append(`<span>${response["indicator"]}</span>`);
                    }
                })
            })
        });
    </script>

@endsection
