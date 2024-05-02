@section('title', 'User Manager')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden">
            @if (session('message'))
                @livewire('alert-message')
            @endif

            <!-- Create user -->
            <div class="mb-6">
                <button wire:click="$dispatch('openModal', { component: { component: {component: 'create-user'} } })"
                    class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                    Add new user
                </button>
            </div>

            <!-- Users list in a table format -->
            <div class="overflow-x-auto shadow-lg border border-slate-300 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Role</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 text-sm font-semibold text-gray-900">{{ $user->name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-sm text-gray-700">{{ $user->role }}</td>
                                <td class="px-6 py-4 text-sm">
                                    <button
                                        wire:click="$dispatch('openModal', { component: { component: {component: 'update-user', arguments: arguments: arguments: {'user': {{ $user->id }}}} } })"
                                        class="bg-yellow-500 text-white font-semibold py-1 px-3 rounded hover:bg-yellow-600">
                                        Edit
                                    </button>
                                    <button
                                        wire:click="$dispatch('openModal', { component: { component: {component: 'delete-user', arguments: arguments: arguments: {'user': {{ $user->id }}}} } })"
                                        class="bg-red-500 text-white font-semibold py-1 px-3 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
