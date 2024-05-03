@section('title', 'User Management')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20">
        <div class="flex flex-col gap-5 overflow-hidden">
            @if (session('message'))
                @livewire('alert-message')
            @endif

            <!-- Create user -->
            <div class="flex justify-end w-full">
                <x-button-add wire:click="$dispatch('openModal', {component: 'create-user'})">
                    Add New User
                </x-button-add>
            </div>

            <!-- Users list -->
            @livewire('table', ['users' => $users])
        </div>
    </div>
</div>
