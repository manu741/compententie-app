@extends('layouts.app')

@section('content')

    <div class="w-full h-full bg-gray-100 dark:bg-gray-600 font-bold text-black dark:text-white">
        <x-popmenu/>

        <div class="flex justify-center">

            <div class="w-8/12 bg-white dark:bg-gray-600 rounded-lg">
                <div class="relative bg-white dark:bg-gray-600 overflow-hidden">
                    <div class="mx-auto">
                        <div class="relative z-10  bg-gray-100 dark:bg-gray-600 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                            </div>
                            <main class="justify-center mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                                <div class="sm:text-center lg:text-center">
                                    <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                        <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Reflecties</span>
                                    </h1>
                                    <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        Begin hier met reflecteren op jouw levenskeuzes.
                                    </span>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="w-8/12 flex">
                <div class="mt-2 mr-auto mb-2">
                    <span class="mr-4">Pop-cyclus:</span>
                    <div class="relative inline-flex">
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-5 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>1e Cyclus 20-21</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2 ml-auto">
                    <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-5 bg-white focus:outline-none appearance-none">
                        <option>Opleiding</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="flex justify-center">
            <div class="bg-gray-200 dark:bg-gray-700 w-8/12 rounded mb-4">
                <span class="flex mb-8 mt-8 ml-12">
                    Voeg reflectie toe in deze POP-Cyclus:
                </span>

                <div class="mt-2 mb-2">
                    <span class="mr-8 ml-12">Soort Reflectie:</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>Reflectie Soort</option>
                            <option>Zelfreflectie</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2">
                    <span class="ml-12 mr-8">Competentie:</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-5 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>Competentie</option>
                            <option>Aardappel eten</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2">
                    <span class="mr-8 ml-12">Indicator:</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-5 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>Indicator</option>
                            <option>Indicatie aardappels eten</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2">
                    <span class="mr-8 ml-12">Niveau: </span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>Niveau</option>
                            <option>Niveau 69</option>
                        </select>
                    </div>
                </div>


                <div class="flex mt-10 ml-12 mb-4">
                    <a href="" class="w-4/12 h-10 flex items-center justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 dark:bg-green-500 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                        Reflectie toevoegen
                    </a>

                    <a href="" class="w-4/12 h-10 flex items-center justify-center px-8 py-3 ml-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 dark:bg-gray-700 dark:text-green-400 dark:border-green-400 hover:bg-indigo-500 md:py-4 md:text-lg md:px-10">
                        Reflectie verwijderen
                    </a>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="bg-gray-200 dark:bg-gray-700 w-8/12 rounded mb-4">

                <div class="flex flex-col ml-12 mr-12">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden sm:rounded-lg">
                                <span class="flex mb-8 mt-8">
                                    Opgenomen competenties en indicator in deze POP-Cyclus:
                                </span>

                                <table class="min-w-full max-w-xl divide-y divide-gray-200 dark:divide-gray-800 border-gray-800 shadow border-2">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Soort Reflectie
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
                                    <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200 dark:divide-gray-800">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Soort reflectie</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Competentie</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator</div>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Soort reflectie</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Competentie</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator</div>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Soort reflectie</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Competentie</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator</div>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex mt-4 mb-4 ml-12">
                    <a href="" class="w-2/12 flex items-center justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 dark:bg-green-500 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                        Details
                    </a>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="bg-gray-200 dark:bg-gray-700 w-8/12 rounded mb-4">
                <span class=" mb-8 ml-12">
                    <span class="flex mb-4 ml-12">Situatie</span>
                    <input type='text' placeholder="Omdat..." class="w-full mt-2 mb-6 px-6 py-3 ml-12 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>

                    <span class="flex mb-4 ml-12">Taak</span>
                    <input type='text' placeholder="Wat ik nodig heb is..." class="w-full mt-2 mb-6 px-6 py-3 ml-12 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>

                    <span class="flex mb-4 ml-12">Actie:</span>
                    <input type='text' placeholder="Ik wil dat..." class="w-full mt-2 mb-6 px-6 py-3 ml-12 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>

                    <span class="flex mb-4 ml-12">Resultaat:</span>
                    <input type='text' placeholder="Ik wil dat..." class="w-full mt-2 mb-6 px-6 py-3 ml-12 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>
                </span>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="" class="w-4/12 flex justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 dark:bg-green-500 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                Opslaan
            </a>
        </div>
    </div>
@endsection
