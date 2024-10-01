@props(['genres'=>[]])
<section >
    <ul>
        <li class="border border-transparent py-2 rounded-t-sm align-top font-bold hover:bg-gray-700 transition-colors duration-500 bg-gray-700 text-white/20 "><a href="" class="text-center block">GENRE</a></li>
        @foreach($genres as $genre)
            @if(request()->is('/'.$genre->genreName))
                <x-menu-item class="bg-green-600 text-gray-800">{{$genre->genreName}} </x-menu-item>
            @else
                <x-menu-item >{{$genre->genreName}} </x-menu-item>
            @endif
        @endforeach
{{--        <x-menu-item>ROMANTISM </x-menu-item>--}}
{{--        <x-menu-item>CUBISM </x-menu-item>--}}
{{--        <x-menu-item>FAUVISM </x-menu-item>--}}
{{--        <x-menu-item>IMPRESSIONISM </x-menu-item>--}}
{{--        <x-menu-item>POST-IMPRESSIONISM </x-menu-item>--}}

    </ul>
</section>
