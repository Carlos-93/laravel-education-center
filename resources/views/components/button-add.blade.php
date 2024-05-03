<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'flex gap-2 items-center px-4 py-2 bg-blue-500 rounded-lg font-semibold text-white tracking-wide hover:bg-blue-700 transition-all duration-200']) }}>
    <p>{{ $slot }}</p>
</button>
