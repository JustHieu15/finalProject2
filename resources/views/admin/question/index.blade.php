@extends('layouts.admin')

@section('title')
    Question
@endsection

@section('content')
    <!-- Main Content -->
    <div class="p-4 sm:ml-auto mr-auto max-w-4xl">
        <!--Test Session -->
        <div class="p-2">
            <div class="w-full h-auto rounded-t-lg p-4 bg-gray-700">
                <h1 class="text-white text-3xl font-bold mb-2 uppercase text-center">
                    Welcome to EduZone's QuestionBank!
                </h1>
            </div>
            <div class="flex w-full h-auto justify-between items-center rounded-b-lg p-4 bg-gray-700">
                <h2 class="text-white text-base font-semibold">Choose test session</h2>
                <div>
                    <form class="max-w-xl mx-auto">
                        <div class="flex flex-row text-white">
                            <!-- Choose semester -->
                            <label for="semester" class="sr-only">Choose semester</label>
                            <select id="semester"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-s-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-80% p-2.5 ">
                                <option selected disabled>Choose semester</option>
                                <option value="1">Semester I</option>
                                <option value="2">Semester II</option>
                            </select>
                            <!-- Choose year -->
                            <label for="year" class="sr-only">Choose subject</label>
                            <select id="countries"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg border-s-gray-100 block w-full p-2.5">
                                <option selected disabled>Choose a subject</option>
                                <option value="ma">Math</option>
                                <option value="li">Literature</option>
                                <option value="en">English</option>
                                <option value="ph">Physics</option>
                                <option value="ch">Chemistry</option>
                                <option value="bi">Biology</option>
                                <option value="cie">Civic Education</option>
                                <option value="in">Informatics</option>
                                <option value="geo">Geography</option>
                                <option value="his">History</option>
                                <option value="mu">Music</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Classes list table -->
        <div class="p-2">
            <div class="realative overflow-x-auto mb-4  rounded-lg bg-gray-700">

                <div class="mt-4">
                    <form class="max-w-md mx-auto">
                        <label for="default-search"
                               class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                   class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 f"
                                   placeholder="Search with Test's, Course's ID" required/>
                            <button type="submit"
                                    class="text-white absolute end-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2 ">
                                Search
                            </button>
                        </div>
                    </form>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-50 bg-gray-700 ">
                        Question bank
                        <p class="mt-1 text-sm font-normal text-gray-300 ">Centralized repository for categorized
                            questions,
                            simplifying assessment creation and tracking question usage and performance.</p>
                    </caption>
                    <thead class="text-xs text-white uppercase bg-gray-500 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            test ID
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Author
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Questions amount
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            Time limit
                        </th>
                        <th scope="col" class="pl-8 py-4">
                            <a href="#" class="hover:underline hover:text-blue-500"></a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tests as $key => $test)
                        <tr class="odd:bg-gray-700 even:bg-gray-400">
                            <th scope="row" class="px-6 py-4 font-medium text-white  whitespace-nowrap uppercase">
                                TESTNO {{ $key + 1 }}
                            </th>

                            <td class="px-6 py-4 text-center uppercase">
                            </td>

                            <td class="px-6 py-4 text-center">
                                50
                            </td>

                            <td class="px-6 py-4 text-center">
                                {{ $test->time_limit }} minutes
                            </td>

                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('admin.test.show', $test->slug) }}"
                                   class="font-medium text-orange-500 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
