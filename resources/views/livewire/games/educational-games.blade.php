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
                            <th class="w-1/5 px-4 py-2 text-left border-b border-gray-300 text-center">User</th>
                            <th class="w-1/5 px-4 py-2 text-left border-b border-gray-300 text-center">Game</th>
                            <th class="w-1/5 px-4 py-2 text-left border-b border-gray-300 text-center">Score</th>
                            <th class="w-1/5 px-4 py-2 text-left border-b border-gray-300 text-center">Date</th>
                            @if (Auth::user()->role == 'admin')
                                <th class="w-1/5 px-4 py-2 text-left border-b border-gray-300 text-center">Actions</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $rowsToDisplay = 5;
                            $currentRowCount = $scores->count();
                        @endphp

                        @foreach ($scores as $score)
                            <tr class="bg-gray-100 border-b border-gray-200 hover:bg-blue-100 font-medium text-center">
                                <td class="px-4 py-2 border-b border-gray-400">
                                    {{ \App\Models\User::find($score->session->user_id)->name }}
                                </td>
                                <td class="px-4 py-2 border-b border-gray-400">
                                    {{ \App\Models\EducationalGame::find($score->session->game_id)->title }}
                                </td>
                                <td class="px-4 py-2 border-b border-gray-400">{{ $score->score }} Points</td>
                                <td class="px-4 py-2 border-b border-gray-400">
                                    {{ \Carbon\Carbon::parse($score->session->end_time)->format('d/m/Y') }}
                                </td>
                                @if (Auth::user()->role == 'admin')
                                    <td class="px-4 py-2 border-b border-gray-400">
                                        <button wire:click="deleteScore({{ $score->id }})"
                                            class="bg-red-500 text-white px-2 py-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 7l16 0" />
                                                <path d="M10 11l0 6" />
                                                <path d="M14 11l0 6" />
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                            </svg>
                                        </button>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        @for ($i = $currentRowCount; $i < $rowsToDisplay; $i++)
                            <tr class="bg-gray-100 border-b border-gray-200 hover:bg-blue-100 font-medium text-center">
                                <td class="px-4 py-2 border-b border-gray-400">&nbsp;</td>
                                <td class="px-4 py-2 border-b border-gray-400">&nbsp;</td>
                                <td class="px-4 py-2 border-b border-gray-400">&nbsp;</td>
                                <td class="px-4 py-2 border-b border-gray-400">&nbsp;</td>
                                @if (Auth::user()->role == 'admin')
                                    <td class="px-4 py-2 border-b border-gray-400">&nbsp;</td>
                                @endif
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
