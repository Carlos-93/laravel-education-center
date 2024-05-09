<div>
    <div class="fixed inset-0 bg-black bg-opacity-50 transition-opacity" aria-hidden="true"></div>
    <div class="relative bg-white rounded-lg max-w-md p-6">
        <div class="flex justify-between items-center border-b border-gray-200 pb-4 mb-4">
            <h2 class="text-lg font-semibold">Delete User "{{ $user->name }}"</h2>
        </div>
        <div class="mb-6">
            <p class="text-gray-700">Are you sure you want to delete this user? <br> This action cannot be undone</p>
        </div>
        <div class="flex justify-end">
            <button wire:click="delete"
                class="px-4 py-2 bg-yellow-400 text-black rounded hover:bg-yellow-600 mr-2 font-medium transition-all ease-in-out duration-300">Delete</button>
            <button wire:click="closeModal"
                class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400 font-medium transition-all ease-in-out duration-300">Cancel</button>
        </div>
    </div>
</div>
