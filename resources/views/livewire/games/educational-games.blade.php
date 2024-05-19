@section('title', 'Educational Games')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col gap-4">
        <h2 class="text-xl font-semibold">All Courses</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
            @foreach ($games as $game)
                <a href="{{ $game->url }}?user_id={{ Auth::user()->id }}">
                    <div class="relative">
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <h2 class="text-xl font-semibold mb-2 truncate">{{ $game->title }}</h2>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
