@extends('layouts.app')

@section('content')
    <div class="w-full h-full dark:bg-gray-600 font-bold text-black dark:text-white">
        <div class="flex justify-center">
            <div class="w-8/12 flex justify-center rounded-lg">
                <div class="relative overflow-hidden">
                    <div class="relative z-10 sm:pb-16 md:pb-20 lg:w-full lg:pb-28 xl:pb-16">
                        <main class="justify-center mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-14">
                            <div class="sm:text-center lg:text-center">
                                <h1 class="text-4xl tracking-tight font-bold text-gray-900 sm:text-4xl md:text-4xl mb-8">
                                    <span class="lg:text-center block text-black dark:text-white xl:inline mb-10">Dashboard</span>
                                </h1>
                                <span class="mt-3 text-base text-gray-500 dark:text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                    Welkom op jouw dashboard!
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
                                <span class="flex mb-8 mt-8">
                                    Meldingen:
                                </span>

                                <table class="min-w-full max-w-xl divide-y divide-x divide-gray-200 dark:divide-gray-500 border-gray-800">
                                    <thead class="bg-gray-100 dark:bg-gray-600"></thead>
                                    <tbody class=" dark:bg-gray-600 divide-y divide-x divide-gray-200 dark:divide-gray-500">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <a href="" class="text-sm text-gray-900 dark:text-white">Feedback ontvangen op Reflectie Samenwerking van Docent A</a>
                                            </div>
                                        </td>
                                    <tr>

                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Feedback ontvangen op Reflectie Einde Cyclus 2 </a>
                                        </td>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <a href="" class="text-sm text-gray-900 dark:text-white">Feedback ontvangen op Reflectie Software Competenties</a>
                                            </div>
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
            <div class="bg-gray-100 dark:bg-gray-700 w-8/12 rounded p-8">

                <div class="flex flex-col ml-12 mr-12">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <span class="flex mb-8 mt-8">
                                    Openstaande reflecties:
                                </span>

                                <table class="min-w-full max-w-xl divide-y divide-x divide-gray-200 dark:divide-gray-500 border-gray-800">
                                    <thead class="bg-gray-100 dark:bg-gray-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Reflectie naam:
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Soort Reflectie
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Gemaakt door:
                                        </th>

                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                            Datum ingevuld:
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class=" dark:bg-gray-600 divide-y divide-x divide-gray-200 dark:divide-gray-500">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <a href="" class="text-sm text-gray-900 dark:text-white">Reflectie Samenwerking</a>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Zelfreflectie</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap dark:text-white">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Student A</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">21/02/2021</a>
                                        </td>
                                    <tr>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <a href="" class="text-sm text-gray-900 dark:text-white">Reflectie Einde Cyclus 2</a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Zelfreflectie</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Student A</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">28/05/2021</a>
                                        </td>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <a href="" class="text-sm text-gray-900 dark:text-white">Reflectie Software Competenties</a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Zelfreflectie</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">Student A</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <a href="" class="text-sm text-gray-900 dark:text-white">11/09/2020</a>
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
