@section('title', 'Courses')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20 flex flex-col gap-5">
        @if (session('message'))
            @livewire('alert-message')
        @endif
        <!-- Courses Teacher and Admin -->
        @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
            <div class="flex justify-end gap-4">
                <x-button-add wire:click="$dispatch('openModal', {component: 'courses.create-course'})">
                    <span>Add Course</span>
                    <i class='bx bxs-graduation text-2xl'></i>
                </x-button-add>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                @foreach ($allCourses as $course)
                    <div class="relative hover-container overflow-hidden rounded-lg shadow-lg">
                        <a href="{{ route('courses.course-details', ['courseId' => $course->id]) }}"
                            title="{{ $course->title }}">
                            <div class="bg-white p-6">
                                @if ($course->image)
                                    <div class="flex justify-center items-center my-5">
                                        <img src="{{ asset($course->image) }}" alt="{{ $course->title }}"
                                            class="w-46 h-40 rounded-xl hover-zoom">
                                    </div>
                                @endif
                                <h2 class="text-xl font-semibold mb-2 truncate">{{ $course->title }}</h2>
                                <p class="text-gray-600 truncate" title="{{ $course->description }}">
                                    {{ $course->description }}</p>
                                <div class="flex mt-4 items-center justify-between">
                                    <div class="flex gap-3">
                                        <p class="font-medium">Imparted by:</p>
                                        @foreach ($course->teachers as $teacher)
                                            <span
                                                class="bg-gray-700 text-yellow-300 px-3 py-1 rounded-full text-xs truncate"
                                                title="{{ $teacher->name }}">{{ $teacher->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="absolute top-4 right-4">
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button type="button" title="Options"
                                        class="text-gray-600 hover:text-gray-800 p-2 rounded-xl hover:bg-gray-100">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.25 4C9.25 2.48 10.48 1.25 12 1.25C13.52 1.25 14.75 2.48 14.75 4C14.75 5.52 13.52 6.75 12 6.75C10.48 6.75 9.25 5.52 9.25 4Z"
                                                fill="#003664" />
                                            <path
                                                d="M9.25 20C9.25 18.48 10.48 17.25 12 17.25C13.52 17.25 14.75 18.48 14.75 20C14.75 21.52 13.52 22.75 12 22.75C10.48 22.75 9.25 21.52 9.25 20Z"
                                                fill="#003664" />
                                            <path
                                                d="M9.25 12C9.25 10.48 10.48 9.25 12 9.25C13.52 9.25 14.75 10.48 14.75 12C14.75 13.52 13.52 14.75 12 14.75C10.48 14.75 9.25 13.52 9.25 12Z"
                                                fill="#003664" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <button
                                        wire:click="$dispatch('openModal', {component: 'courses.update-course', arguments: { courseId: {{ $course->id }} }})"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Update Course
                                    </button>
                                    <button
                                        wire:click="$dispatch('openModal', {component: 'courses.delete-course', arguments: { courseId: {{ $course->id }} }})"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Delete Course
                                    </button>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Enrolled Courses Student -->
            <h2 class="text-xl font-semibold text-yellow-400">Enrolled Courses</h2>
            @if ($enrolledCourses->isEmpty())
                <p class="text-white mb-8">
                    {{ $userName }}, you are not enrolled in any courses. Enroll in a course to get started!
                </p>
            @else
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-12">
                    @foreach ($enrolledCourses as $course)
                        <div class="relative z-10 hover-container overflow-hidden rounded-lg shadow-lg">
                            <button type="button" wire:click="unenroll({{ $course->id }})"
                                class="absolute top-0 right-0 m-2 text-sm hover:font-semibold bg-yellow-400 px-3 py-1 rounded-lg w-36 transition-all ease-in-on duration-300">
                                Unenroll Course
                            </button>
                            <a href="{{ route('courses.course-details', ['courseId' => $course->id]) }}"
                                title="{{ $course->title }}">
                                <div class="bg-white p-6">
                                    @if ($course->image)
                                        <div class="flex justify-center items-center my-5">
                                            <img src="{{ asset($course->image) }}" alt="{{ $course->title }}"
                                                class="w-46 h-40 rounded-xl hover-zoom">
                                        </div>
                                    @endif
                                    <h2 class="text-xl font-semibold mb-2 truncate">{{ $course->title }}</h2>
                                    <p class="text-gray-600 truncate" title="{{ $course->description }}">
                                        {{ $course->description }}
                                    </p>
                                    <div class="flex mt-4 items-center justify-between">
                                        <div class="flex gap-3">
                                            <p class="font-medium">Imparted by:</p>
                                            @foreach ($course->teachers as $teacher)
                                                <span
                                                    class="bg-gray-700 text-yellow-300 px-3 py-1 rounded-full text-xs truncate"
                                                    title="{{ $teacher->name }}">{{ $teacher->name }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
            <!-- Not Enrolled Courses Student -->
            <h2 class="text-xl font-semibold text-yellow-400">Not Enrolled Courses</h2>
            @if ($notEnrolledCourses->isEmpty())
                <p class="text-white mb-8">
                    {{ $userName }}, you are enrolled in all available courses. Check back later for more courses!
                </p>
            @else
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                    @foreach ($notEnrolledCourses as $course)
                        <div class="relative hover-container overflow-hidden rounded-lg shadow-lg">
                            <button type="button" wire:click="enroll({{ $course->id }})"
                                class="absolute top-0 right-0 m-2 text-sm hover:font-semibold bg-yellow-400 px-3 py-1 rounded-lg w-32 transition-all ease-in-on duration-300">
                                Enroll Course
                            </button>
                            <a href="#" title="{{ $course->title }}">
                                <div class="bg-white p-6">
                                    @if ($course->image)
                                        <div class="flex justify-center items-center my-5">
                                            <img src="{{ asset($course->image) }}" alt="{{ $course->title }}"
                                                class="w-46 h-40 rounded-xl hover-zoom">
                                        </div>
                                    @endif
                                    <h2 class="text-xl font-semibold mb-2 truncate">{{ $course->title }}</h2>
                                    <p class="text-gray-600 truncate" title="{{ $course->description }}">
                                        {{ $course->description }}
                                    </p>
                                    <div class="flex mt-4 items-center justify-between">
                                        <div class="flex gap-3">
                                            <p class="font-medium">Imparted by:</p>
                                            @foreach ($course->teachers as $teacher)
                                                <span
                                                    class="bg-gray-700 text-yellow-300 px-3 py-1 rounded-full text-xs truncate"
                                                    title="{{ $teacher->name }}">{{ $teacher->name }}</span>
                                            @endforeach
                                        </div>
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
