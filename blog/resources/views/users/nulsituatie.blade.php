@extends('layouts.app')

@section('content')

    <div class="w-full h-full bg-gray-100 dark:bg-gray-600 font-bold text-black dark:text-white">
        <x-popmenu/>

        <div class="flex justify-center">
            <div class="w-8/12 flex justify-center bg-gray-100 dark:bg-gray-600 rounded-lg">
                <div class="relative bg-gray-100 dark:bg-gray-600 overflow-hidden">
                    <div class="relative z-10  bg-gray-100 dark:bg-gray-600 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                        <main class="justify-center mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                            <div class="sm:text-center lg:text-center">
                                <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                    <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Nulsituatie</span>
                                </h1>
                                <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Wat een onbenullige situatie.
                                </span>
                            </div>
                        </main>
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

                <div class="ml-12 mb-4 mt-4 flex-row">
                    <span class="flex mb-4">Competenties</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>Competentie</option>
                            <option>Aardappel Eten</option>
                        </select>
                    </div>
                </div>

                <div class="ml-12 mb-4 mt-12">
                    <span class="mb-4">Indicatoren (3 labels hieronder)</span>
                    <div class="w-6/12">
                        <input type='text' placeholder="Indicator komt hier te staan" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>
                        <input type='text' placeholder="Indicator komt hier te staan" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>
                        <input type='text' placeholder="Indicator komt hier te staan" class="w-full mt-2 mb-6 px-6 py-3 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>
                    </div>
                </div>

                <span class=" mb-8 ml-12">
                    <span class="flex mb-4 ml-12">Toelichting (1 groot textfeld)</span>
                    <input type='text' placeholder="Omdat..." class="w-full  mt-2 mb-6 px-6 py-3 ml-12 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>
                </span>

                <div class="ml-12">
                    <span class="mb-4 mr-12">Tot welk niveau rijkt mijn competentiebeheersing voor de competentie (competentie naam)?</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>

                <div class="ml-12 mt-4">
                    <span class="mb-4 mr-12">Welk cijfer geef ik mijzelf voor deze competentie??</span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                </div>
                <span class=" mb-8 ml-12 mt-4">
                    <span class="flex mb-4 ml-12">Welk compliment heb jij onglangs ontvangen? Waarover ging dat (en van wie?)</span>
                    <input type='text' placeholder="Omdat..." class="w-full mt-2 mb-6 px-6 py-3 ml-12 border rounded-lg text-lg max-w-xl text-gray-700 focus:outline-none"/>
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


