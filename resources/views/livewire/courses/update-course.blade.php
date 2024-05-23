<div class="mx-auto p-4 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-center">Update Course</h2>
    <form wire:submit.prevent="update" class="gap-5 flex flex-col">
        <article class="flex flex-col gap-2">
            <x-label for="title" class="font-semibold">Title</x-label>
            <x-input type="text" wire:model="title"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Course Title" required />
            @error('title')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="description" class="font-semibold">Description</x-label>
            <textarea wire:model="description"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="Course Description" required></textarea>
            @error('description')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2 mb-2">
            <x-label for="teachers" class="font-semibold">Teachers</x-label>
            <select wire:model="selectedTeachers" multiple
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
            @error('selectedTeachers')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <x-button-add>
            Update
        </x-button-add>
    </form>
</div>