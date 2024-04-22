@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-yellow-400 focus:ring-yellow-400 rounded-md shadow-sm']) !!}>
