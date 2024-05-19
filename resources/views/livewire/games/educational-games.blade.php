@section('title', 'Educational Games')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20 flex flex-col gap-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-16">
            <div class="relative hover-container overflow-hidden rounded-lg shadow-lg">
                @foreach ($games as $game)
                    <a href="{{ $game->url }}?user_id={{ Auth::user()->id }}">
                        <div class="relative">
                            <div class="bg-white rounded-lg shadow-lg p-6">
                                @if ($game->image)
                                    <div class="flex justify-center items-center my-10">
                                        <img src="{{ asset($game->image) }}" alt="{{ $game->title }}"
                                            class="w-46 h-40 rounded-xl hover-zoom">
                                    </div>
                                @endif
                                <h2 class="text-xl font-semibold mb-2 truncate">{{ $game->title }}</h2>
                                <p class="text-gray-600">{{ $game->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>