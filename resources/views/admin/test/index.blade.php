@extends('layouts.admin')

@section('title')
    Class
@endsection

@section('content')
    {{--    @error('class')--}}
    {{--        <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--    @enderror--}}

    {{--    @if (session('success'))--}}
    {{--        <div class="alert alert-success">{{ session('success') }}</div>--}}
    {{--    @endif--}}

    <!-- Main Content -->
    <div class="p-4 sm:ml-auto mr-auto max-w-4xl">
        <!-- Create Class button -->
        <div class="p-2">
            <div class="flex w-full h-auto justify-between items-center rounded-lg p-4 bg-gray-700">
                <h2 class="text-white text-base font-semibold">Create a new Test</h2>
                <a href="/html/Test/testcreate.html">
                    <button type="button"
                            class=" text-white bg-orange-500 hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        <h3>Create&#160&#160</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512">
                            <path fill="#ffffff"
                                  d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                        </svg>
                    </button>
                </a>
            </div>
        </div>

        <!--Test Session -->
        <div class="p-2">
            <div class="flex w-full h-auto justify-between items-center rounded-lg p-4 bg-gray-700">
                <h2 class="text-white text-base font-semibold">Choose test session</h2>
                <div>
                    <form class="max-w-xl mx-auto">
                        <div class="flex flex-row text-white">
                            <!-- Choose semester -->
                            <label for="semester" class="sr-only">Choose semester</label>
                            <select id="semester"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-s-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-80% p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose semester</option>
                                <option value="1">Semester I</option>
                                <option value="2">Semester II</option>
                            </select>
                            <!-- Choose year -->
                            <label for="year" class="sr-only">Choose year</label>
                            <select id="year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose year</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Classes list table -->
        <div class="p-2">
            <div class="relative overflow-x-auto mb-4  rounded-lg bg-gray-700">

                <div class="mt-4">
                    <form class="max-w-md mx-auto">
                        <label for="default-search"
                               class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                   class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 f"
                                   placeholder="Search with Test's, Course's ID" required />
                            <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                        </div>
                    </form>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-50 bg-gray-700 ">
                        Your tests list
                        <p class="mt-1 text-sm font-normal text-gray-300 ">The 'Test List' displays all assessments within
                            your courses. Quickly access test details and student performance to streamline grading and monitor
                            progress.</p>
                    </caption>
                    <thead class="text-xs text-white uppercase bg-gray-500 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            test ID
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            course id
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Questions amount
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Date created
                        </th>
                        <th scope="col" class="pl-8 py-4">
                            <a href="#" class="hover:underline hover:text-blue-500"></a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="odd:bg-gray-700 even:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-white  whitespace-nowrap uppercase">
                            testno1
                        </th>
                        <td class="px-6 py-4 text-center uppercase">
                            courseno1
                        </td>
                        <td class="px-6 py-4 text-center">
                            50
                        </td>
                        <td class="px-6 py-4 text-center">
                            (dd/mm/yyyy)
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-orange-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-gray-700 even:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap uppercase">
                            testno2
                        </th>
                        <td class="px-6 py-4 text-center uppercase">
                            courseno2
                        </td>
                        <td class="px-6 py-4 text-center">
                            50
                        </td>
                        <td class="px-6 py-4 text-center">
                            (dd/mm/yyyy)
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-orange-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-gray-900 even:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap uppercase">
                            testno3
                        </th>
                        <td class="px-6 py-4 text-center uppercase">
                            courseno3
                        </td>
                        <td class="px-6 py-4 text-center">
                            50
                        </td>
                        <td class="px-6 py-4 text-center">
                            (dd/mm/yyyy)
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-orange-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-gray-900 even:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap uppercase">
                            testno4
                        </th>
                        <td class="px-6 py-4 text-center uppercase">
                            courseno4
                        </td>
                        <td class="px-6 py-4 text-center">
                            50
                        </td>
                        <td class="px-6 py-4 text-center">
                            (dd/mm/yyyy)
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-orange-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-gray-900 even:bg-gray-400">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap uppercase">
                            testno5
                        </th>
                        <td class="px-6 py-4 text-center uppercase">
                            courseno5
                        </td>
                        <td class="px-6 py-4 text-center">
                            50
                        </td>
                        <td class="px-6 py-4 text-center">
                            (dd/mm/yyyy)
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="font-medium text-orange-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('script')
@endpush

