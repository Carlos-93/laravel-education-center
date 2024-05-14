@section('title', $course->title)

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
        @if (session()->has('message'))
            @livewire('alert-message')
        @endif
        <!-- Course details -->
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="flex justify-between p-6 bg-white border-b border-gray-200">
                <p class="text-gray-500">{{ $course->description }}</p>
            </div>
        </div>
        <!-- Resources -->
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- Resources actions -->
                <div class="flex justify-between mb-4">
                    <h2 class="text-3xl text-blue85/70 font-bold">Resources</h2>
                    @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <x-button-add
                            wire:click="$dispatch('openModal', {component: 'resources.create-resource', arguments: {courseId: {{ $course->id }}}})">
                            Add resource
                        </x-button-add>
                    @endif
                </div>
                <!-- Resources list -->
                <ul class="flex gap-4 flex-col list-none text-black33">
                    @if ($course->resources->isEmpty())
                        <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                            <p>No resources available</p>
                        </li>
                    @else
                        @foreach ($course->resources as $resource)
                            <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                                <a href="{{ Storage::url($resource->url) }}" target="_blank"
                                    class="flex flex-col gap-4">
                                    <div class="flex items-center gap-4">
                                        @switch($resource->resource_type)
                                            @case('ppt')
                                                <img src="{{ asset('assets/img/IconPPT.svg') }}" alt="PPT icon">
                                            @break

                                            @case('pdf')
                                                <img src="{{ asset('assets/img/IconPDF.svg') }}" alt="PDF icon">
                                            @break

                                            @default
                                                <img src="{{ asset('assets/img/IconPDF.svg') }}" alt="PDF icon">
                                        @endswitch
                                        <p>{{ $resource->title }}</p>
                                    </div>
                                    <p class="pl-2">{{ $resource->created_at->diffForHumans() }}</p>
                                </a>
                                @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
                                    <div>
                                        <button
                                            wire:click="$dispatch('openModal', {component: 'resources.edit-resource', arguments: {resourceId: {{ $resource->id }}}})"
                                            class="bg-blue-500/80 text-white px-4 py-2 rounded-md">Edit</button>
                                        <button
                                            wire:click="$dispatch('openModal', {component: 'resources.delete-resource', arguments: {resourceId: {{ $resource->id }}}})"
                                            class="bg-red-500/80 text-white px-4 py-2 rounded-md">Delete</button>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <!-- Practices -->
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- Practices actions -->
                <div class="flex justify-between mb-4">
                    <h2 class="text-3xl text-blue85/70 font-bold">Practices</h2>
                    @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <x-button-add>
                            Add practice
                        </x-button-add>
                    @endif
                </div>
                <!-- Practices list -->
                <ul class="flex gap-4 flex-col list-none text-black33">
                    @if ($course->resources->isEmpty())
                        <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                            <p>No practices available</p>
                        </li>
                    @else
                        @foreach ($course->resources as $resource)
                            <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                                <a href="{{ $resource->url }}" target="_blank" class="flex gap-4 items-center">
                                    <p>{{ $resource->title }}</p>
                                </a>
                                @if (Auth::user()->isStudent())
                                    <button class="bg-green-500/80 text-white px-4 py-2 rounded-md">Completed</button>
                                @elseif(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                                    <div>
                                        <button class="bg-blue-500/80 text-white px-4 py-2 rounded-md">Edit</button>
                                        <button class="bg-red-500/80 text-white px-4 py-2 rounded-md">Delete</button>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <!-- Submissions -->
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- Submissions actions -->
                <div class="flex justify-between mb-4">
                    <h2 class="text-3xl text-blue85/70 font-bold">Submissions</h2>
                    @if (Auth::user()->isTeacher() || Auth::user()->isAdmin())
                        <x-button-add>
                            Add submission
                        </x-button-add>
                    @endif
                </div>
                <!-- Submissions list -->
                <ul class="flex gap-4 flex-col list-none text-black33">
                    @if ($course->resources->isEmpty())
                        <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                            <p>No submissions available</p>
                        </li>
                    @else
                        @foreach ($course->resources as $resource)
                            <li class="flex justify-between items-center hover:bg-slate-200 p-2 rounded-xl">
                                <a href="{{ $resource->url }}" target="_blank" class="">
                                    <p>{{ $resource->title }}</p>
                                </a>
                                @if (Auth::user()->isStudent())
                                    <button class="bg-slate-500/80 text-white px-4 py-2 rounded-md">Mark
                                        completed</button>
                                @elseif(Auth::user()->isTeacher() || Auth::user()->isAdmin())
                                    <div>
                                        <button class="bg-blue-500/80 text-white px-4 py-2 rounded-md">Edit</button>
                                        <button class="bg-red-500/80 text-white px-4 py-2 rounded-md">Delete</button>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
