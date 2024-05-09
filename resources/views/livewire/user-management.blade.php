@section('title', 'User Management')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20">
        <div class="flex flex-col gap-5 overflow-hidden">

            <!-- Create user -->
            <div class="flex justify-between w-full">
                <!-- Search input -->
                <input type="search" wire:model="search" placeholder="Search users..."
                    class="w-1/4 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">

                @if (session('message'))
                    @livewire('alert-message')
                @endif

                <x-button-add wire:click="$dispatch('openModal', {component: 'create-user'})">
                    Create User
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                    </svg>
                </x-button-add>
            </div>

            <!-- Users list -->
            @livewire('table', ['users' => $users])
        </div>
    </div>
</div>