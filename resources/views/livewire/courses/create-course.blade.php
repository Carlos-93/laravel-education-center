<div class="mx-auto p-4 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-center">Create Course</h2>
    <form wire:submit.prevent="store" class="gap-5 flex flex-col" enctype="multipart/form-data">
        <article class="flex flex-col gap-2">
            <x-label for="title" value="Title" />
            <x-input type="text" wire:model="title" placeholder="Course Title" required />
            @error('title')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="description" value="Description" />
            <textarea wire:model="description" placeholder="Course Description"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500"
                required>
            </textarea>
            @error('description')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2 mb-2">
            <x-label for="teachers" value="Teachers" />
            <select wire:model="teachers" multiple
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                @foreach ($allTeachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
            @error('teachers')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2 mb-2">
            <x-label for="image" value="Course Image" />
            <input type="file" wire:model="image"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
            @error('image')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" class="mt-2 w-32 h-32 object-cover">
            @endif
        </article>

        <x-button-add>
            Create
        </x-button-add>
    </form>
</div>