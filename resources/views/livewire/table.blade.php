<div class="w-full overflow-auto rounded-2xl max-h-[34rem]">
    <table class="min-w-full divide-y divide-gray-300 border border-gray-300 rounded-lg">
        <thead class="bg-blue-100">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Name</th>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Email</th>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Role</th>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr class="hover:bg-yellow-100 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-semibold">{{ $user['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">{{ $user['email'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">{{ $user['role'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex gap-3 justify-center items-center">
                            <button
                                wire:click="$dispatch('openModal', {component: 'update-user', arguments: {'user': {{ $user->id }}}})"
                                class="bg-yellow-500 text-white font-semibold px-4 py-2 rounded hover:bg-yellow-600 transition-colors gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </button>
                            <button
                                wire:click="$dispatch('openModal', {component: 'delete-user', arguments: {'user': {{ $user->id }}}})"
                                class="bg-red-500 text-white font-semibold px-4 py-2 rounded hover:bg-red-600 transition-colors gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
