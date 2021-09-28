@props(['active' => false])

@php
    $classes = 'block px-3 text-sm leading-6 hover:bg-blue-400 hover:text-white focus:bg-blue-400 focus:text-white';

    if ($active) $classes .= ' bg-blue-400 text-white';
@endphp

<a {{ $attributes(['class' => "$classes"]) }} style="text-align: left">
{{ $slot }}</a>
