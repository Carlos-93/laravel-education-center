@section('title', 'Dashboard')

<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="flex justify-start items-center gap-5 mt-8">
        <div class="flex flex-col gap-1">
            <p class="text-bold text-3xl">Welcome {{ Auth::user()->name }}!</p>
            <p class="text-gray-500">{{ __('You are logged in!') }}</p>
        </div>
    </div>
</div>
