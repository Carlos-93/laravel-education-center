<div>
    <h2>Edit Resource</h2>
    <form wire:submit.prevent="updateResource">
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-2">
                <label for="title">Title</label>
                <input type="text" wire:model="title" id="title" class="border border-gray-200 p-2 rounded-md">
                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="url">New File</label>
                <input type="file" wire:model="file" id="file" class="border border-gray-200 p-2 rounded-md">
                @error('file')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="url">Current File</label>
                <a href="{{ Storage::url($resource->url) }}"
                    target="_blank">{{ $title }}.{{ $resource_type }}</a>
            </div>
            <div class="flex flex-col gap-2">
                <label for="resource_type">Resource Type</label>
                <select wire:model="resource_type" id="resource_type" class="border border-gray-200 p-2 rounded-md">
                    <option value="ppt">PPT</option>
                    <option value="pdf">PDF</option>
                </select>
                @error('resource_type')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="content">Content</label>
                <textarea wire:model="content" id="content" class="border border-gray-200 p-2 rounded-md"></textarea>
                @error('content')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex justify-end gap-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
                <button type="button" wire:click="closeModal"
                    class="bg-red-500 text-white px-4 py-2 rounded-md">Cancel</button>
            </div>
        </div>
    </form>
</div>
