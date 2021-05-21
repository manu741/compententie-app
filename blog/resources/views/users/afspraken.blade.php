@extends('layouts.app')

@section('content')
    <div class="w-full h-full dark:bg-gray-600 font-bold text-black dark:text-white">
        <x-popmenu/>

        <div class="flex justify-center">
            <div class="w-8/12 flex justify-center rounded-lg">
                <div class="relative overflow-hidden">
                    <div class="relative z-10 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                        <main class="justify-center mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                            <div class="sm:text-center lg:text-center">
                                <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                    <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Afspraken</span>
                                </h1>
                                <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Begin hier met het maken van jouw afspraken.
                                </span>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center">
            <div class="w-8/12 flex">
                <div class="mt-5 mr-auto mb-5">
                    <span class="mr-4">Pop-cyclus:</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-500 dark:text-gray-400 dark:border-gray-600 dark:hover:border-gray-700 hover:border-gray-400" style="width:180px;">
                            <option>1e Cyclus 20-21</option>
                            <option>2e Cyclus 20-21</option>
                            <option>1e Cyclus 21-22</option>
                            <option>2e Cyclus 21-22</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 mb-2 ml-auto">
                    <div class="relative inline-flex">

                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-500 dark:text-gray-400 dark:border-gray-600 dark:hover:border-gray-700 hover:border-gray-400" style="width:180px;">
                            <option>Opleiding</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>


        <div class="flex justify-center">
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded p-8">
                <span class=" my-2">Welke competenties neem je op in deze POP-Cylcus?
                </span>



                <div class="w-full my-2">
                    <label class=" my-2">Competenties
                        <div class="my-2 relative inline-flex ml-8">
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                                <option>Competentie</option>
                                <option>Indicator</option>
                            </select>
                        </div>
                    </label>
                </div>

                <div class="w-full my-2">
                    <label class=" my-2">Indicator
                        <div class="my-2 relative inline-flex ml-8">
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                                <option>Indicator</option>
                                <option>Indicator</option>
                            </select>
                        </div>
                    </label>
                </div>

                <div class="w-full my-2">
                    <label class=" my-2">Niveau
                        <div class="my-2 relative inline-flex ml-8">
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                            <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                                <option>Niveau</option>
                                <option>Niveau</option>
                            </select>
                        </div>
                    </label>
                </div>



                <div class="flex mt-10 ml-12 mb-4">
                    <a href="" class="w-4/12 h-10 flex items-center justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 dark:bg-green-500 hover:bg-blue-700 md:py-4 md:text-lg md:px-10 dark:hover:bg-green-600">
                        Competentie toevoegen
                    </a>

                    <a href="" class="w-4/12 h-10 flex items-center justify-center px-8 py-3 ml-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-400 dark:bg-gray-700 dark:text-green-400 dark:border-green-400 hover:bg-blue-500 md:py-4 md:text-lg md:px-10 dark:hover:bg-border-700">
                        Competentie verwijderen
                    </a>
                </div>
            </div>
        </div>



    <div class="flex justify-center my-8">
        <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded p-8">

                <div class="flex flex-col ml-12 mr-12">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <span class="flex mb-8 mt-8">
                                    Opgenomen competenties en indicator in deze POP-Cyclus:
                                </span>

                                <table class="min-w-full max-w-xl divide-y divide-x divide-gray-200 dark:divide-gray-500 border-gray-800">
                                    <thead class="bg-gray-100 dark:bg-gray-600">
                                    <tr>
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
                                    <tbody class=" dark:bg-gray-600 divide-y divide-x divide-gray-200 dark:divide-gray-500">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Competentie</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau 1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator</div>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Competentie</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau 1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator</div>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm text-gray-900 dark:text-white">Competentie</div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Niveau 1</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900 dark:text-white">Indicator</div>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex mt-4 mb-4 ml-12">
                    <a href="" class="w-2/12 flex items-center justify-center px-8 py-3 mr-10 mt-2 mb-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 dark:bg-green-500 hover:bg-blue-700  dark:hover:bg-green-600 md:py-4 md:text-lg md:px-10">
                        Details
                    </a>
                </div>
            </div>
    </div>

        <div class="flex justify-center my-8">
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded p-8">
                    <div class="w-full my-4">
                        <label>Waarom nu in POP?
                            <textarea placeholder="Omdat..." class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"></textarea>
                        </label>
                     </div>

                    <div class="w-full my-4">
                        <label>Wie/wat heb je nodig en wanneer ga je de activiteit uitvoeren?
                            <textarea placeholder="Omdat..." class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"></textarea>
                        </label>
                     </div>
                    <div class="w-full my-4">
                        <label>Gewenste Resultaat:
                            <textarea placeholder="Omdat..." class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"></textarea>
                        </label>
                     </div>
            </div>
        </div>
        <div class="py-4">
            <div class="flex justify-center">
                <a href="" class="w-2/12 flex justify-center border border-transparent text-base font-medium rounded-md text-white bg-blue-500 dark:bg-green-500 dark:hover:bg-green-600 hover:bg-blue-700 px-3 py-2">
                    Opslaan
                </a>
            </div>
        </div>
    </div>
@endsection
