@section('title', 'Games')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20 flex flex-col gap-20">
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
        <section class="flex justify-center">
            <div class="overflow-x-auto w-full max-w-7xl rounded-lg">
                <table class="min-w-full bg-white shadow-lg">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="w-1/4 px-4 py-2 text-left border-b border-gray-300 text-center">User</th>
                            <th class="w-1/4 px-4 py-2 text-left border-b border-gray-300 text-center">Game</th>
                            <th class="w-1/4 px-4 py-2 text-left border-b border-gray-300 text-center">Score</th>
                            <th class="w-1/4 px-4 py-2 text-left border-b border-gray-300 text-center">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scores as $score)
                            <tr class="bg-gray-100 border-b border-gray-200 hover:bg-yellow-100 font-medium text-center">
                                <td class="px-4 py-2 border-b border-gray-300">
                                    {{ \App\Models\User::find($score->session->user_id)->name }}</td>
                                <td class="px-4 py-2 border-b border-gray-300">
                                    {{ \App\Models\EducationalGame::find($score->session->game_id)->title }}</td>
                                <td class="px-4 py-2 border-b border-gray-300">{{ $score->score }} Points</td>
                                <td class="px-4 py-2 border-b border-gray-300">
                                    {{ \Carbon\Carbon::parse($score->session->end_time)->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
