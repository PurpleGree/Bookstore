@props(['active' => false])

@php
    $currentStyle = ' ';
    if($active) $currentStyle = 'bg-gray-900 text-green ';
    $defaultAttribute = ['class'=>" {{ $currentStyle }} justify-center px-3 rounded-md  py-2 hover:bg-gray-700 hover:text-green-500 font-medium text-white text-center transition-colors duration-700"]

@endphp
<a  {{$attributes( $defaultAttribute)}} aria-current="page">{{ $slot }}</a>

