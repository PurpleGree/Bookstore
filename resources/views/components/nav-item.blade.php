@props(['active' => false])

@php
    $currentStyle = ' ';
    if($active) $currentStyle = 'bg-gray-900 text-green ';

@endphp
<a href="/genre/{{$slot}}" class=" {{ $currentStyle }}px-3 rounded-md  py-2 hover:bg-gray-700 hover:text-green-500 font-medium text-white transition-colors duration-700" aria-current="page">{{ $slot }}</a>

