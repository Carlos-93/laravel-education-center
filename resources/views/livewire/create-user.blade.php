<div class="max-w-xl mx-auto p-4 shadow-lg rounded-lg">
    <form wire:submit.prevent="store" class="space-y-4 flex flex-col">
        <x-input type="text" wire:model="name" placeholder="Name" required />
        <x-input type="email" wire:model="email" placeholder="Email" required />
        <select wire:model="selectedRole"
            class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="">Select Role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <x-button-add>
            Create User
        </x-button-add>
    </form>
</div>
