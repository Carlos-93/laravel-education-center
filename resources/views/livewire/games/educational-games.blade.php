@section('title', 'Games')

<div class="py-12">
    <div class="mx-auto sm:px-6 lg:px-20 flex flex-col gap-20">
        <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4 mt-10">
            @foreach ($games as $game)
                <div class="relative hover-container overflow-hidden rounded-lg">
                    <a href="{{ $game->url }}?user_id={{ Auth::user()->id }}">
                        <div class="relative">
                            <div class="bg-white rounded-lg p-4">
                                @if ($game->image)
                                    <div class="flex justify-center items-center mt-4 mb-8">
                                        <img src="{{ asset($game->image) }}" alt="{{ $game->title }}"
                                            class="w-full max-w-xs md:max-w-sm h-[11rem] rounded-xl hover-zoom">
                                    </div>
                                @endif
                                <h2 class="text-lg font-semibold mb-2 truncate">{{ $game->title }}</h2>
                                <p class="text-gray-600 text-sm">{{ $game->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <section class="flex justify-center">
            <div class="overflow-x-auto w-full max-w-7xl rounded-lg">
                <table class="min-w-full bg-white shadow-lg">
                    <thead class="bg-yellow-400">
                        <tr>
                            <th class="table-cell px-4 py-3 text-left border-b border-gray-300 text-center">User</th>
                            <th class="table-cell px-4 py-3 text-left border-b border-gray-300 text-center">Game</th>
                            <th class="table-cell px-4 py-3 text-left border-b border-gray-300 text-center">Score</th>
                            <th class="table-cell px-4 py-3 text-left border-b border-gray-300 text-center">Date</th>
                            <th class="table-cell px-4 py-3 text-left border-b border-gray-300 text-center">Time</th>
                            @if (Auth::user()->role == 'admin')
                                <th class="table-cell px-4 py-3 text-left border-b border-gray-300 text-center">Actions
                                </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $rowsToDisplay = 5;
                            $currentRowCount = $scores->count();
                        @endphp
                        @foreach ($scores as $score)
                            <tr class="bg-gray-100 border-b border-gray-200 hover:bg-blue-100 transition-all ease-in-out duration-300 font-medium text-center">
                                <td class="table-cell px-4 py-3 border-b border-gray-400">
                                    {{ \App\Models\User::find($score->session->user_id)->name }}
                                </td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">
                                    {{ \App\Models\EducationalGame::find($score->session->game_id)->title }}
                                </td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">{{ $score->score }} Points
                                </td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">
                                    {{ \Carbon\Carbon::parse($score->session->end_time)->format('d/m/Y') }}
                                </td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">
                                    {{ \Carbon\Carbon::parse($score->session->end_time)->format('H:i:s') }}
                                </td>
                                @if (Auth::user()->role == 'admin')
                                    <td class="table-cell px-4 py-3 border-b border-gray-400">
                                        <button wire:click="deleteScore({{ $score->id }})"
                                            class="bg-red-500 hover:bg-red-600 transition-all ease-in-out duration-300 text-white px-4 py-1.5 rounded">
                                            Delete
                                        </button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        @for ($i = $currentRowCount; $i < $rowsToDisplay; $i++)
                            <tr class="bg-gray-100 border-b border-gray-200 hover:bg-blue-100 font-medium text-center transition-all ease-in-out duration-300">
                                <td class="table-cell px-4 py-3 border-b border-gray-400">&nbsp;</td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">&nbsp;</td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">&nbsp;</td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">&nbsp;</td>
                                <td class="table-cell px-4 py-3 border-b border-gray-400">&nbsp;</td>
                                @if (Auth::user()->role == 'admin')
                                    <td class="table-cell px-4 py-3 border-b border-gray-400">&nbsp;</td>
                                @endif
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
