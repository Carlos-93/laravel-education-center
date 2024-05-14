@section('title', 'Courses')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
        @if (session('message'))
            @livewire('alert-message')
        @endif
        <!-- Courses Teacher and Admin -->
        @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
            <div class="flex justify-end gap-4">
                <x-button-add wire:click="create">
                    Add Course
                </x-button-add>
            </div>
            @if ($isModalOpen)
                <div class="p-6">
                    <form
                        @if ($isUpdating) wire:submit.prevent="update"
                        @else 
                            wire:submit.prevent="store" @endif
                        class="space-y-4">
                        <input type="text" wire:model="title" placeholder="Title"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                        @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <textarea wire:model="description" placeholder="Description"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                        @error('description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <select wire:model="teachers" multiple
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                            @foreach ($allTeachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                        @error('teachers')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end space-x-4">
                            <button type="submit"
                                class="px-6 py-2 bg-blue85 text-white rounded-md hover:bg-blue85/70 focus:outline-none focus:bg-blue-600">
                                @if ($isUpdating)
                                    Update Course
                                @else
                                    Create Course
                                @endif
                            </button>
                            <button type="button" wire:click="closeModal()"
                                class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400">Cancel</button>
                        </div>
                    </form>
                </div>
            @endif
            <h2 class="text-xl font-semibold">All Courses</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                @foreach ($allCourses as $course)
                    <div class="relative">
                        <a href="{{ route('courses.course-details', ['courseId' => $course->id]) }}"
                            title="{{ $course->title }}">
                            <div class="bg-white rounded-lg shadow-lg p-6">
                                <h2 class="text-xl font-semibold mb-2 truncate">{{ $course->title }}</h2>
                                <p class="text-gray-600 truncate" title="{{ $course->description }}">
                                    {{ $course->description }}</p>
                                <div class="flex mt-4 items-center justify-between">
                                    <div class="flex">
                                        @foreach ($course->teachers as $teacher)
                                            <span
                                                class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs mr-2 truncate"
                                                title="{{ $teacher->name }}">{{ $teacher->name }}</span>
                                        @endforeach
                                    </div>
                                    <a href="#">
                                        <x-dropdown>
                                            <x-slot name="trigger">
                                                <button type="button" title="Options"
                                                    class="text-gray-600 hover:text-gray-800 p-2 rounded-xl hover:bg-gray-100">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.25 4C9.25 2.48 10.48 1.25 12 1.25C13.52 1.25 14.75 2.48 14.75 4C14.75 5.52 13.52 6.75 12 6.75C10.48 6.75 9.25 5.52 9.25 4Z"
                                                            fill="#333333" />
                                                        <path
                                                            d="M9.25 20C9.25 18.48 10.48 17.25 12 17.25C13.52 17.25 14.75 18.48 14.75 20C14.75 21.52 13.52 22.75 12 22.75C10.48 22.75 9.25 21.52 9.25 20Z"
                                                            fill="#333333" />
                                                        <path
                                                            d="M9.25 12C9.25 10.48 10.48 9.25 12 9.25C13.52 9.25 14.75 10.48 14.75 12C14.75 13.52 13.52 14.75 12 14.75C10.48 14.75 9.25 13.52 9.25 12Z"
                                                            fill="#333333" />
                                                    </svg>
                                                </button>
                                            </x-slot>
                                            <x-slot name="content">
                                                <button wire:click="edit({{ $course->id }})"
                                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</button>
                                                <button wire:click="destroy({{ $course->id }})"
                                                    class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Delete</button>
                                            </x-slot>
                                        </x-dropdown>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Courses Student -->
        @else
            <h2 class="text-xl font-semibold">Enrolled Courses</h2>
            @if ($enrolledCourses->isEmpty())
                <p class="text-gray-600 mb-8">You are not enrolled in any courses. Enroll in a course to get started!
                </p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                    @foreach ($enrolledCourses as $course)
                        <div class="relative">
                            <a href="{{ route('courses.course-details', ['courseId' => $course->id]) }}"
                                title="{{ $course->title }}">
                                <div class="bg-white rounded-lg shadow-lg p-6">
                                    <h2 class="text-xl font-semibold mb-2 truncate">{{ $course->title }}</h2>
                                    <p class="text-gray-600 truncate" title="{{ $course->description }}">
                                        {{ $course->description }}</p>
                                    <div class="flex mt-4 justify-between">
                                        <div class="flex">
                                            @foreach ($course->teachers as $teacher)
                                                <span
                                                    class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs mr-2 truncate"
                                                    title="{{ $teacher->name }}">{{ $teacher->name }}</span>
                                            @endforeach
                                        </div>
                                        <a href="#">
                                            <button type="button" wire:click="unenroll({{ $course->id }})"
                                                class="text-sm text-black33 hover:text-black hover:font-semibold">Unenroll</button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            <h2 class="text-xl font-semibold">Not Enrolled Courses</h2>
            @if ($notEnrolledCourses->isEmpty())
                <p class="text-gray-600 mb-8">You are enrolled in all available courses. Check back later for more
                    courses!</p>
            @else
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                    @foreach ($notEnrolledCourses as $course)
                        <div class="relative">
                            <a href="{{ route('courses.course-details', ['courseId' => $course->id]) }}"
                                title="{{ $course->title }}">
                                <div class="bg-white rounded-lg shadow-lg p-6">
                                    <h2 class="text-xl font-semibold mb-2 truncate">{{ $course->title }}</h2>
                                    <p class="text-gray-600 truncate" title="{{ $course->description }}">
                                        {{ $course->description }}</p>
                                    <div class="flex mt-4 justify-between">
                                        <div class="flex">
                                            @foreach ($course->teachers as $teacher)
                                                <span
                                                    class="bg-gray-200 text-gray-800 px-2 py-1 rounded-full text-xs mr-2 truncate"
                                                    title="{{ $teacher->name }}">{{ $teacher->name }}</span>
                                            @endforeach
                                        </div>
                                        <a href="#">
                                            <button type="button" wire:click="enroll({{ $course->id }})"
                                                class="text-sm text-black33 hover:text-black hover:font-semibold">Enroll</button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
    </div>
</div>
