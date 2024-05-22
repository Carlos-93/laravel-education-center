@section('title', 'Staff Chat')

<div class="flex justify-center py-20 h-[83vh]">
    <div id="chatContainer" class="bg-gray-900 pt-6 px-6 rounded-xl w-full max-w-5xl flex flex-col">
        <div class="flex flex-col flex-grow overflow-auto mb-4">
            @foreach ($messages as $message)
                <div
                    class="flex items-end {{ $message['user_id'] === Auth::id() ? 'justify-end' : 'justify-start' }} mb-4">
                    <div
                        class="flex flex-col space-y-2 text-xs max-w-xs mx-2 {{ $message['user_id'] === Auth::id() ? 'order-1 items-end' : 'order-2 items-start' }}">
                        <div>
                            <span
                                class="flex flex-col gap-1 px-2.5 py-1.5 rounded-lg inline-block {{ $message['user_id'] === Auth::id() ? 'bg-green-600 text-white' : 'bg-gray-700 text-white' }}">
                                <strong>{{ \App\Models\User::find($message['user_id'])->name }}:</strong>
                                <span class="flex gap-5 justify-between items-center font-medium">
                                    {{ $message['message'] }}
                                    <span class="flex text-[10px]">
                                        {{ \Carbon\Carbon::parse($message['created_at'])->format('H:i') }}h
                                    </span>
                                </span>
                            </span>
                        </div>
                        <small
                            class="text-gray-300">{{ \Carbon\Carbon::parse($message['created_at'])->diffForHumans() }}</small>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        <section class="flex justify-center items-center">
            <form wire:submit.prevent="sendMessage" class="p-4 flex w-full max-w-2xl">
                <input type="text" wire:model="newMessage" placeholder="Type your message here..."
                    class="flex-grow focus:border-yellow-400 focus:ring-yellow-400 rounded-lg" required>
                <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg ml-4 transition-all ease-in-out duration-300">
                    Send Message
                </button>
            </form>
        </section>
    </div>
</div>
