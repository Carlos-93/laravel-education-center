<div>
    <form wire:submit.prevent="store">
        <input type="text" wire:model="name" placeholder="Name" required>
        <input type="email" wire:model="email" placeholder="Email" required>
        <select wire:model="selectedRole">
            <option value="">Select Role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create User</button>
    </form>
</div>