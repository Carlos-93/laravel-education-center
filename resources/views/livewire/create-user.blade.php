<div class="mx-auto p-4 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-center">Create User</h2>
    <form wire:submit.prevent="store" class="gap-5 flex flex-col">
        <article class="flex flex-col gap-2">
            <x-label for="name" value="Name" />
            <x-input type="text" wire:model="name" placeholder="User" required />
            @error('name')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="email" value="Email" />
            <x-input type="email" wire:model="email" placeholder="user@monlau.com" required />
            @error('email')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="password" value="Password" />
            <x-input type="password" wire:model="password" placeholder="********" required />
            @error('password')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2">
            <x-label for="password_confirmation" value="Confirm Password" />
            <x-input type="password" wire:model="password_confirmation" placeholder="********" required />
            @error('password_confirmation')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </article>

        <article class="flex flex-col gap-2 mb-2">
            <x-label for="role" value="Role" />
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
            Create
        </x-button-add>
    </form>
</div>
