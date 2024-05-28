@section('title', 'Staff Chat')

<div class="flex justify-center py-20 h-[83vh]">
    <div class="bg-gray-900 pt-12 px-12 rounded-xl w-full max-w-5xl flex flex-col">
        <div id="chatContainer" class="flex flex-col flex-grow overflow-auto mb-12">
            @foreach ($messages as $message)
                <div
                    class="flex items-end {{ $message['user_id'] === Auth::id() ? 'justify-end' : 'justify-start' }} mb-5">
                    <div
                        class="flex flex-col space-y-2 text-xs max-w-md {{ $message['user_id'] === Auth::id() ? 'order-1 items-end' : 'order-2 items-start' }}">
                        <div>
                            <span
                                class="flex flex-col gap-1 px-3 py-2 inline-block {{ $message['user_id'] === Auth::id() ? 'bg-green-600 text-white rounded-t-xl rounded-bl-xl' : 'bg-gray-700 text-white rounded-t-xl rounded-br-xl' }}">
                                <strong>{{ \App\Models\User::find($message['user_id'])->name }}:</strong>
                                <span class="flex gap-5 justify-between items-center font-medium">
                                    {{ $message['message'] }}
                                    <span class="flex text-[11px]">
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
            <form wire:submit.prevent="sendMessage" id="sendMessage" class="py-6 flex w-full max-w-2xl">
                <input type="text" wire:model="newMessage" placeholder="Type your message here..."
                    class="flex-grow focus:border-yellow-400 focus:ring-yellow-400 rounded-lg" required>
                <button type="submit"
                    class="flex gap-2 bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded-lg ml-4 transition-all ease-in-out duration-300">
                    Send Message
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-send-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" />
                        <path d="M6.5 12h14.5" />
                    </svg>
                </button>
            </form>
        </section>
    </div>
</div>

<script>
    function scrollDown() {
        const chatContainer = document.getElementById('chatContainer');
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }

    window.document.addEventListener('DOMContentLoaded', () => {
        scrollDown();

        const sendMessage = document.getElementById('sendMessage');
        sendMessage.addEventListener('submit', () => {
            scrollDown();
        });
    });

    window.addEventListener('messageSent', event => {
        scrollDown();
    });
</script>
