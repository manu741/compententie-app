@extends('layouts.app')

@section('content')
    <x-popmenu/>

    <div class="justify-center bg-white dark:bg-gray-600">
        <div class="text-center w-12/12 bg-white dark:bg-gray-600 rounded-lg">
            <div class="relative bg-white dark:bg-gray-600 overflow-hidden">
                <div class="mx-auto">
                    <div class="relative bg-white dark:bg-gray-600 sm:pb-16 md:pb-20 lg:w-full lg:pb-20 xl:pb-12">
                        <main class=" mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                            <div class="text-center lg:text-center">
                                <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                    <span class="text-center block text-black dark:text-white xl:inline mb-10">
                                        Mid-term review
                                    </span>
                                </h1>
                                <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Hier kan je bezig met je mid-term review.
                                </span>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center my-8">
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded p-8">
                <div class="flex flex-col ml-12 mr-12">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <span class="flex mb-8 mt-8 font-bold text-gray-600 dark:text-white">
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
            </div>
        </div>

        <div class="flex justify-center">
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded-b mb-4">
                    <span class="flex mb-8 mt-8 ml-12 font-bold text-gray-600 dark:text-white">
                        Voeg een mid-term review toe aan een specifieke competentie:
                    </span>
                <div class="mt-2 mb-2 px-12 font-bold text-gray-600 dark:text-white">
                    Hoe beoordeel jij jouw eigen progressie in deze competentie?
                </div>
                <div class="flex mt-2 mb-2 px-12 text-gray-600 dark:text-white bg-gray-100 dark:bg-gray-700">
                    <a target="_blank" href="" id="Goed" class="px-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.507 13.941c-1.512 1.195-3.174 1.931-5.506 1.931-2.334 0-3.996-.736-5.508-1.931l-.493.493c1.127 1.72 3.2 3.566 6.001 3.566 2.8 0 4.872-1.846 5.999-3.566l-.493-.493zm-9.007-5.941c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5z"/></svg></a>
                    <a target="_blank" href="" id="Goed" class="px-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4 17h-8v-2h8v2zm-7.5-9c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5z"/></svg></a>
                    <a target="_blank" href="" id="Goed" class="px-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-3.5 8c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm7 0c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5-.672-1.5-1.5-1.5zm-.941 9.94c-.903-.19-1.741-.282-2.562-.282-.819 0-1.658.092-2.562.282-1.11.233-1.944-.24-2.255-1.015-.854-2.131 1.426-3.967 4.816-3.967 3.537 0 5.666 1.853 4.817 3.968-.308.769-1.136 1.249-2.254 1.014zm-2.563-1.966c1.614 0 3.056.67 3.206.279.803-2.079-7.202-2.165-6.411 0 .138.377 1.614-.279 3.205-.279z"/></svg></a>
                </div>
                <div class="mt-2 mb-2 px-12 font-bold text-gray-600 dark:text-white">
                    Wat is jouw progressie ten opzichte van het begin van de cyclus?
                </div>
                <div class="mt-2 mb-8 px-12">
                    <label>
                        <textarea placeholder="Mijn progressie ten opzichte van het begin van de cyclus is..." class="mt-2 w-full border text-md text-gray-700 focus:outline-none px-6 py-3 dark:bg-gray-600 dark:text-gray-400 dark:border-gray-500 dark:hover:border-gray-800 hover:border-gray-400"></textarea>
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

    {{--    <div class="gradient dark:text-white min-h-screen flex items-center">--}}
    {{--        <div class="container mx-auto p-4 flex flex-wrap items-center">--}}
    {{--            <div class="w-full md:w-5/12 text-center p-4">--}}
    {{--                <img src="https://flipstore.withun.link/images/404.png" alt="Not Found" />--}}
    {{--            </div>--}}
    {{--            <div class="w-full md:w-7/12 text-center md:text-left p-4">--}}
    {{--                <div class="text-6xl font-medium">404</div>--}}
    {{--                <div class="text-xl md:text-3xl font-medium mb-4">--}}
    {{--                    Oops. Deze pagina bestaat nog niet--}}
    {{--                </div>--}}
    {{--                <div class="text-lg mb-8">--}}
    {{--                    Je hebt waarschijnlijk een typefout gemaakt, probeer het opnieuw.--}}
    {{--                </div>--}}
    {{--                <a href="{{ route('home')}}" class="border border-blue-400 dark:border-green-400   hover:border-blue-600 dark:hover:border-green-600 rounded py-2 px-3 text-blue-400 dark:text-green-400 hover:text-blue-600 dark:hover:text-green-600">Home</a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
