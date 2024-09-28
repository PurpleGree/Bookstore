@php
    $defaultStyle = ['class'=>"border py-2 align-top font-bold hover:bg-gray-700 hover:text-green-500 transition-colors duration-500 px-1",]
@endphp

<li {{ $attributes($defaultStyle) }} ><a href="" class="text-center block">{{$slot}}</a></li>
