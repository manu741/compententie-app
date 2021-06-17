<!-- Modal Reflecties -->
<div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto" x-show="showModal1">
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-8/12 mx-2 sm:mx-auto my-10 opacity-100">
        <div class="relative bg-white dark:bg-gray-600 shadow-lg text-gray-900 z-20" @click.away="showModal1 = false" x-show="showModal1">
            <div class="flex items-center justify-between p-2">
                <button class="focus:outline-none p-2" @click="showModal1 = false"></button>
            </div>

            <div class="w-full h-full dark:bg-gray-600 font-bold text-black dark:text-white">
                <form action="{{ route('saveDatapoint', ['id' => $datapunt->id]) }}" method="post">
                    @csrf
                    <div class="p-4">

                        <div class=" bg-gray-100 dark:bg-gray-700 w-full rounded p-8">

                            <div class="w-full">
                                <label class=" my-2">Naam: </label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <span>
                                        {{ $datapunt->naam }}
                                    </span>
                                </div>
                            </div>

                            <div class="w-full">
                                <label class=" my-2">Aanmaak datum: </label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <span>
                                        {{ $datapunt->created_at->format('d/m/Y') }}
                                    </span>
                                </div>
                            </div>

                            <div class="w-full">
                                <label>Bevroren: </label>
                                <label class="inline-flex items-center mt-3"></label>
                                @if ($datapunt->bevroren)
                                    <span class="text-sm text-gray-900 dark:text-white ml-4">Ja</span>
                                @else
                                    <span class="text-sm text-gray-900 dark:text-white ml-4">Nee</span>
                                @endif
                            </div>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 w-full rounded p-8 my-8">
                            <div class="w-full my-2">
                                <label class="mx-auto my-2">POP cyclus</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <input disabled type='text' placeholder="1e cyclus 20-21" class="w-full bg-green-100 my-2 px-6 py-3 border text-md text-gray-700 focus:outline-none dark:bg-green-200 dark:text-white dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"/>
                                </div>
                            </div>

                            <div class="w-full my-2">
                                <label class=" my-2">Onderwijseenheid</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                                    <select name="onderwijseenheid" class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                                        <option disabled selected>Kies een optie...</option>
                                        @foreach($onderwijseenheden as $eenheid)
                                            <option value="{{ $eenheid->id }}">{{ $eenheid->eenheid }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="w-full my-2">
                                <label class="mx-auto my-2">Opdrachtgever</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                                    <select name="opdrachtgever" class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
{{--                                        @if($datapunt->odrachtgever_id != null)--}}
{{--                                            <option value="{{ $datapunt->opdrachtgever_id }}" selected>{{ $datapunt->opdrachtgever->voornaam }}</option>--}}
{{--                                        @else--}}
{{--                                            <option disabled selected>Kies een optie...</option>--}}
{{--                                        @endif--}}

                                        @foreach($opdrachtgevers as $opdrachtgever)
                                            @if($opdrachtgever->id != $datapunt->opdrachtgever_id)
                                                <option value="{{ $opdrachtgever->id }}">{{ $opdrachtgever->voornaam }} {{ $opdrachtgever->achternaam }}</option>
                                            @endif
                                        @endforeach
                                    </select>
{{--                                    <p>{{ $datapunt->opdrachtgever->achternaam }}</p>--}}
                                </div>
                            </div>

                            <div class="w-full my-2">
                                <label class="mx-auto my-2">Beroepsproduct</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                                    <select name="beroepsproduct" class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-2 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                                        @if($datapunt->beroepsproduct_id != null)
                                            <option value="{{ $datapunt->beroepsproduct_id }}" selected>{{ $datapunt->beroepsproduct->beroepsproduct }}</option>
                                        @else
                                            <option disabled selected>Kies een optie...</option>
                                        @endif

                                        @foreach($beroepsproducten as $beroepsproduct)
                                            @if($beroepsproduct->id != $datapunt->beroepsproduct_id)
                                                <option value="{{ $beroepsproduct->id }}">{{ $beroepsproduct->beroepsproduct }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="w-full my-2">
                                <label class="mx-auto my-2">Competentie</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <span class="text-sm text-gray-900 dark:text-white ml-4">{{$datapunt->indicatoren->competenties->competentie}}</span>
                                </div>
                            </div>

                            <div class="w-full my-2">
                                <label class="mx-auto my-2">Niveau</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <span class="text-sm text-gray-900 dark:text-white ml-4">{{$datapunt->indicatoren->niveau}}</span>
                                </div>
                            </div>

                            <div class="w-full my-2">
                                <label class="mx-auto w-12 my-2">Indicator</label>
                                <div class="my-2 relative inline-flex ml-8">
                                    <span class="text-sm text-gray-900 dark:text-white ml-4">{{$datapunt->indicatoren->indicator}}</span>
                                </div>
                            </div>

                        </div>

                        <div class="w-full my-8">
                            <div class="bg-gray-100 dark:bg-gray-700 w-full rounded p-8">
                                <div class="w-full my-4">
                                    <label>Onderbouwing:</label>
                                    <textarea name="onderbouwing" placeholder="Omdat..." class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400">
                                        {{ $datapunt->onderbouwing  }}
                                    </textarea>
                                </div>

                                <div class="flex">
                                    <label class="py-6">Assessor (1e)</label>
                                    <div class="my-2 relative inline-flex ml-8">
                                        <svg class="w-2 h-2 absolute top-1 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
                                        <select class="border border-gray-300 text-gray-600 bg-white hover:border-gray-400 focus:outline-none appearance-none px-3 py-4 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400" style="width:300px;">
                                            <option name="assessor">Ron Heusdens</option>
                                        </select>
                                    </div>

                                    <div class="justify-center mx-4">
                                        <a href="" class="rounded-md flex justify-center px-8 py-2 mr-10 mt-2 mb-2 border border-transparent text-base font-medium text-white bg-blue-500 dark:bg-green-500 hover:bg-blue-700 dark:hover:bg-green-700 md:py-4 md:text-lg md:px-10">
                                            Verzoek om feedback
                                        </a>
                                    </div>
                                </div>

                                <div class="w-full my-4">
                                    <label>Feedback:</label>
                                    <textarea name="feedback" @if($datapunt->feedback == null)placeholder="Omdat..." @endif class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400">
                                        {{ $datapunt->feedback }}
                                    </textarea>
                                </div>
                                <div class="w-full my-4">
                                    <label>Feedup:</label>
                                    <textarea name="feedup" @if($datapunt->feedup == null)placeholder="Omdat..." @endif class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400">
                                        {{ $datapunt->feedup }}
                                    </textarea>
                                </div>
                                <div class="w-full my-4">
                                    <label>Feedforward: </label>
                                    <textarea name="feedforward" @if($datapunt->feedforward == null)placeholder="Omdat..." @endif class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400">
                                        {{ $datapunt->feedforward }}
                                    </textarea>
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
                                    Verwijder dit datapunt
                                </button>
                            </div>

                            <div class="w-full mt-16 mb-4 px-4">
                                <label class="w-full my-4">Bestandbijlage(*Word, PDF, JPG, etc)</label>
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

                    <div class="flex justify-center p-2">
                        <button type="submit" class="bg-blue-500 font-semibold text-white dark:bg-green-500 p-2 w-32 rounded hover:bg-blue-600 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300" @click="showModal1 = false">
                            Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
