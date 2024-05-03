<div class="w-full overflow-auto rounded-2xl">
    <table class="min-w-full divide-y divide-gray-300 border border-gray-300 rounded-lg shadow-md">
        <thead class="bg-blue-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-blue-800 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-blue-800 uppercase tracking-wider">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-blue-800 uppercase tracking-wider">Role</th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-semibold text-blue-800 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($users as $user)
                <tr class="hover:bg-blue-50 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user['email'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $user['role'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button
                            wire:click="$dispatch('openModal', {component: 'update-user', arguments: {'user': {{$user->id}}}})"
                            class="bg-yellow-500 text-white font-semibold px-4 py-1 rounded hover:bg-yellow-600 transition-colors">
                            Edit
                        </button>
                        <button
                            wire:click="$dispatch('openModal', {component: 'delete-user', arguments: {'user': {{$user->id}}}})"
                            class="bg-red-500 text-white font-semibold px-4 py-1 rounded hover:bg-red-600 transition-colors">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
