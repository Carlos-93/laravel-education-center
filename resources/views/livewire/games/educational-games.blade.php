@section('title', 'Games')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20 flex flex-col gap-5">
        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4 mt-16">
            @foreach ($games as $game)
                <div class="relative hover-container overflow-hidden rounded-lg">
                    <a href="{{ $game->url }}?user_id={{ Auth::user()->id }}">
                        <div class="relative">
                            <div class="bg-white rounded-lg p-6">
                                @if ($game->image)
                                    <div class="flex justify-center items-center my-10">
                                        <img src="{{ asset($game->image) }}" alt="{{ $game->title }}"
                                            class="w-full max-w-xs md:max-w-md lg:max-w-lg h-[13rem] rounded-xl hover-zoom">
                                    </div>
                                @endif
                                <h2 class="text-xl font-semibold mb-2 truncate">{{ $game->title }}</h2>
                                <p class="text-gray-600">{{ $game->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
