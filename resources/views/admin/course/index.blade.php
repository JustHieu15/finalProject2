@extends('layouts.admin')

@section('title')
    Course
@endsection

@section('content')
    <!-- Main Content -->
    <div class="p-4 sm:ml-auto mr-auto max-w-4xl">
        <!--Course Session -->
        <div class="p-2">
            <div class="flex w-full h-auto justify-between items-center rounded-lg p-4 bg-gray-700">
                <h2 class="text-white text-base font-semibold">Choose course session</h2>
                <div>
                    <form class="max-w-xl mx-auto">
                        <div class="flex flex-row text-white">
                            <!-- Choose semester -->
                            <label for="semester" class="sr-only">Choose semester</label>
                            <select id="semester"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-s-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-80% p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose semester</option>
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->name }}</option>
                                @endforeach
                            </select>

                            <!-- Choose year -->
                            <label for="year" class="sr-only">Choose year</label>
                            <select id="year"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected disabled>Choose year</option>
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ $semester->year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Create Course button -->
        <div class="p-2">
            <div class="flex w-full h-auto justify-between items-center rounded-lg p-4 bg-gray-700">
                <h2 class="text-white text-base font-semibold">Create a new course</h2>
                <a href="{{ route('admin.course.create') }}">
                    <button type="button"
                            class=" text-white bg-orange-500 hover:bg-orange-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                        <h3>Create&#160&#160</h3>
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512">
                            <path fill="#ffffff"
                                  d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                        </svg>
                    </button>
                </a>
            </div>
        </div>

        <!-- Courses list table -->
        <div class="p-2">
            <div class="realative overflow-x-auto mb-4  rounded-lg bg-gray-700">
                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-50 bg-gray-700 ">
                        Courses list
                        <p class="mt-1 text-sm font-normal text-gray-300 ">The 'Your courses list' table gives teachers
                            an overview of their assigned classes, displaying key details like course names, subjects,
                            and schedules for efficient management.</p>
                    </caption>
                    <thead class="text-xs text-white uppercase bg-gray-500 ">
                    <tr>
                        <th scope="col" class="px-6 py-4">
                            course name
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            course id
                        </th>
                        <th scope="col" class="px-6 py-4 text-center">
                            subjects
                        </th>
                        <th scope="col" class="pl-8 py-4">
                            <a href="{{ route('admin.course.edit', [1]) }}" class="hover:underline hover:text-blue-500"></a>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($courses as $course)
                        <tr class="odd:bg-gray-700 even:bg-gray-400">
                            <th scope="row" class="px-6 py-4 font-medium text-white  whitespace-nowrap ">
                                {{ $course->name }}
                            </th>
                            <td class="px-6 py-4 text-center uppercase">
                                COURSE {{ $course->id }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $course->subject_name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route('admin.course.edit', $course->id) }}" class="font-medium text-orange-500 hover:underline">Edit</a>
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
