@extends('layouts.app')

@section('content')

    <div class="w-full h-full bg-white dark:bg-gray-600 font-bold text-black dark:text-white">
        <x-popmenu/>

        <div class="flex justify-center">
            <div class="w-8/12 flex justify-center rounded-lg">
                <div class="relative overflow-hidden">
                    <div class="relative z-10 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
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

        <div class="flex justify-center S">
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 p-8">

                <div class="w-full my-2">
                    <label class=" my-2">Competenties
                    <div class="my-2 relative inline-flex ml-8">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                            <option>Competentie</option>
                            <option>Aardappel Eten</option>
                        </select>
                    </div>
                    </label>
                </div>



                <div class="w-full my-2">
                        <label class="my-2">Indicatoren (3 labels hieronder)
                            <input disabled type='text' placeholder="Indicator komt hier te staan" class="w-full bg-white my-2 px-6 py-3 border text-md text-gray-700 focus:outline-none dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"/>

                            <input disabled type='text' placeholder="Indicator komt hier te staan" class="w-full bg-white my-2 px-6 py-3 border text-md text-gray-700 focus:outline-none dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"/>

                            <input disabled type='text' placeholder="Indicator komt hier te staan" class="w-full bg-white my-2 px-6 py-3 border text-md text-gray-700 focus:outline-none dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"/>
                        </label>
                </div>

                <div class="w-full my-2">
                    <label>Toelichting
                    <textarea placeholder="Omdat..." class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"></textarea>
                        </label>
                </div>

                <div class="w-full my-2">
                    <label class=" my-2 font-normal">Tot welk niveau rijkt mijn competentiebeheersing voor de competentie (competentie naam)?
                    <div class="relative inline-flex ml-8">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:60px;">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    </label>
                </div>

                <div class="w-full my-2">
                    <label class=" my-2 font-normal">Welk cijfer geef ik mijzelf voor deze competentie?
                    <div class="relative inline-flex ml-8">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                        <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:60px;">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    </label>
                </div>

                <div class="w-full my-4">

                <label>Welk compliment heb jij onlangs ontvangen? Waarover ging dat (en van wie?)
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


