<!-- Modal Reflecties -->
<div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto" x-show="showModal1">
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-6/12 mx-2 sm:mx-auto my-10 opacity-100">
        <div class="relative bg-white dark:bg-gray-600 shadow-lg text-gray-900 z-20" @click.away="showModal1 = false" x-show="showModal1">
            <div class="flex items-center justify-between p-2">
                <button class="focus:outline-none p-2" @click="showModal1 = false"></button>
            </div>

            <div class="w-full h-full dark:bg-gray-600 font-bold text-black dark:text-white">
                <div class="p-4">
                    <div class="bg-gray-100 dark:bg-gray-700 w-full rounded p-8">
                        <span class=" my-2">Welke competenties neem je op in deze POP-Cylcus?</span>

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

                        <div class="w-full my-2">php
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
                    </div>

                    <div class="w-full my-8">
                        <div class="bg-gray-100 dark:bg-gray-700 w-full rounded p-8">
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

                    {{--Bestand Upload Div--}}
                    <div class="w-full my-8">

                        <div class="flex dark:bg-gray-600 w-full rounded p-4">
                            <label class="my-auto">Bijlage: </label>
                            <textarea class="w-full h-10 my-auto mx-2 border-2 border-gray-100 dark:bg-gray-700 dark:border-gray-700 rounded focus outline-none"></textarea>
                            <button class="bg-blue-500 font-semibold mx-2 my-auto text-white align-middle dark:bg-green-500 p-2 w-64 rounded dark:hover:bg-green-600 hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Verkort URL
                            </button>
                            <button class="bg-blue-500 font-semibold mx-2 my-auto text-white dark:bg-green-500 p-2 w-32 rounded dark:hover:bg-green-600 hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Preview
                            </button>
                        </div>

                        <div class="flex dark:bg-gray-600 w-full rounded p-4">
                            <label class="my-auto">Bijlage: </label>
                            <textarea class="w-full h-10 my-auto mx-2  border-2 rounded border-gray-100 dark:bg-gray-700 dark:border-gray-700 focus outline-none"></textarea>
                            <button class="bg-blue-500 font-semibold mx-2 my-auto text-white align-middle dark:bg-green-500 p-2 w-64 rounded dark:hover:bg-green-600 hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Verkort URL
                            </button>
                            <button class="bg-blue-500 font-semibold mx-2 my-auto text-white dark:bg-green-500 p-2 w-32 rounded dark:hover:bg-green-600 hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Preview
                            </button>
                        </div>

                        <div class="flex dark:bg-gray-600 w-full rounded p-4">
                            <label class="my-auto">Bijlage: </label>
                            <textarea class="w-full h-10 my-auto mx-2  border-2 rounded border-gray-100 dark:bg-gray-700 dark:border-gray-700 focus outline-none"></textarea>
                            <button class="bg-blue-500 font-semibold mx-2 my-auto text-white align-middle dark:bg-green-500 p-2 w-64 rounded dark:hover:bg-green-600 hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Verkort URL
                            </button>
                            <button class="bg-blue-500 font-semibold mx-2 my-auto text-white dark:bg-green-500 p-2 w-32 rounded dark:hover:bg-green-600 hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Preview
                            </button>
                        </div>

                        <div class="w-full px-4">
                            <button class="my-auto float-right bg-red-500 font-semibold text-white align-middle dark:bg-red-500 h-10 w-64 mx-4 rounded dark:hover:bg-red-600 hover:bg-red-600 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Verwijder Competentie
                            </button>
                        </div>

                    <div class="w-full mt-16 mb-4 px-4">
                        <label class="w-full">Bestandbijlage(*Word, PDF, JPG, etc)</label>
                        <div class="flex w-full">
                            <button class="my-auto float-right bg-gray-100 font-semibold text-gray-600 align-middle dark:bg-gray-500 dark:text-gray-300 h-10 w-64 mr-4 rounded hover:bg-gray-400 focus:outline-none focus:ring shadow-lg hover:shadow-none">
                                Kies bestand
                            </button>

                            <button class="my-auto float-right bg-blue-500 font-semibold text-white align-middle dark:bg-green-500 h-10 w-64 mx-4 rounded hover:bg-blue-600 focus:outline-none dark:hover:bg-green-600 focus:ring shadow-lg hover:shadow-none">
                                Bladeren
                            </button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

                <div class="flex justify-center p-2">
                    <button class="bg-blue-500 font-semibold text-white dark:bg-green-500 p-2 w-32 rounded hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300" @click="showModal1 = false">
                        Opslaan
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
