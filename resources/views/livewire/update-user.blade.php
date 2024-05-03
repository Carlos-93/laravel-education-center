<div>
    <form wire:submit.prevent="update">
        <input type="text" wire:model="name" placeholder="Name">
        <input type="email" wire:model="email" placeholder="Email">
        <select wire:model="selectedRole">
            <option value="">Select Role</option>
            @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <input type="password" wire:model="password" placeholder="New Password">
        <input type="password" wire:model="password_confirmation" placeholder="Confirm Password">
        @error('password')
            <span class="error">{{ $message }}</span>
        @enderror
        <button type="submit">Update user</button>
    </form>
</div>