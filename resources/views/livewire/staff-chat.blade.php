@section('title', 'Staff Chat')

<div class="flex justify-center py-20">
    <div id="chatContainer" class="bg-white p-6 rounded-xl w-full max-w-5xl overflow-auto h-[75vh]">
        <div class="flex flex-col">
            @foreach ($messages as $message)
                <div
                    class="flex items-end {{ $message['user_id'] === Auth::id() ? 'justify-end' : 'justify-start' }} mb-4">
                    <div
                        class="flex flex-col space-y-2 text-xs max-w-xs mx-2 {{ $message['user_id'] === Auth::id() ? 'order-1 items-end' : 'order-2 items-start' }}">
                        <div>
                            <span
                                class="flex flex-col gap-1 px-2.5 py-1.5 rounded-lg inline-block {{ $message['user_id'] === Auth::id() ? 'bg-green-600 text-white' : 'bg-gray-300 text-gray-600' }}">
                                <strong>{{ \App\Models\User::find($message['user_id'])->name }}:</strong>
                                <span class="flex gap-5 justify-between items-center">
                                    {{ $message['message'] }}
                                    <span class="flex text-[10px]">
                                        {{ \Carbon\Carbon::parse($message['created_at'])->format('H:i') }}
                                    </span>
                                </span>
                            </span>
                        </div>
                        <small
                            class="text-gray-500">{{ \Carbon\Carbon::parse($message['created_at'])->diffForHumans() }}</small>
                    </div>
                </div>
            @endforeach
            <hr>
        </div>
        <section class="flex justify-center items-center mt-4">
            <form wire:submit.prevent="sendMessage" class="p-4 flex w-full max-w-2xl">
                <input type="text" wire:model="newMessage" placeholder="Type your message here..."
                    class="flex-grow focus:border-yellow-400 focus:ring-yellow-400 rounded-lg" required>
                <button type="submit"
                    class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg ml-4 transition-all ease-in-on duration-300">
                    Send Message
                </button>
            </form>
        </section>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var chatContainer = document.getElementById('chatContainer');
        chatContainer.scrollTop = chatContainer.scrollHeight;
    });
</script>