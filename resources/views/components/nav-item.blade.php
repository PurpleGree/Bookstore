@props(['active' => false])

@php
    $currentStyle = ' ';
    if($active) $currentStyle = 'rounded-md bg-gray-900  ';

@endphp
<a href="#" class=" {{ $currentStyle }}px-3 py-2 font-medium text-white" aria-current="page">{{ $slot }}</a>

