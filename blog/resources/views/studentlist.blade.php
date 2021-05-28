@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto">
        <div class=" bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        {{ $students->links() }}
                        <thead>
                            <tr class="min-w-screen bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <td class="py-3 px-6 text-left">Studentnr</td>
                                <td class="py-3 px-6 text-left">Naam</td>
                                <td class="py-3 px-6 text-left">Achternaam</td>
                                <td class="py-3 px-6 text-left">Email</td>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-normal text-lg">
                        @foreach($students as $student)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <a href="{{ route('students.student', $student->id) }}">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{$student->studentnr}}</span>
                                        </div>
                                    </a>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <a href="{{ route('students.student', $student->id) }}">
                                        <span>{{$student->firstname}}</span>
                                    </a>
                                </td>

                                <td class="py-3 px-6 text-left">
                                    <a href="{{ route('students.student', $student->id) }}">
                                        <span>{{$student->lastname}}</span>
                                    </a>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <a href="{{ route('students.student', $student->id) }}">
                                        <span>{{$student->email}}</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
