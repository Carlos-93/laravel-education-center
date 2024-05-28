<div class="mx-auto p-4 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-center">Update User</h2>
    <form wire:submit.prevent="update" class="gap-5 flex flex-col">
        <article class="flex flex-col gap-2">
            <x-label for="name" class="font-semibold">Name</x-label>
            <x-input type="text" wire:model="name"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="User" required />
            @error('name')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="email" class="font-semibold">Email</x-label>
            <x-input type="email" wire:model="email"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="user@monlau.com" required />
            @error('email')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="password" class="font-semibold">New Password</x-label>
            <x-input type="password" wire:model="password"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="********" />
            @error('password')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="password_confirmation" class="font-semibold">Confirm Password</x-label>
            <x-input type="password" wire:model="password_confirmation"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                placeholder="********" />
            @error('password_confirmation')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2 mb-2">
            <x-label for="role" class="font-semibold">Role</x-label>
            <select wire:model="selectedRole"
                class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
            @error('selectedRole')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <x-button-add>
            Update
        </x-button-add>
    </form>
</div>