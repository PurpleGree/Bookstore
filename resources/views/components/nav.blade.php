@props(['genres'=>[]])
<div>
    <nav class="bg-green-600/70">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Left section: logo and nav links -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex space-x-4">
                            <!-- Navigation links -->
                            <x-nav-item active="{{request()->is('/')}}">Home</x-nav-item>
                            @foreach($genres as $genre)
                                <x-nav-item active="{{request()->is('/'.$genre->genreName)}}">{{$genre->genreName}}</x-nav-item>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- Right section: Add any right-aligned items here -->
            </div>
        </div>
    </nav>
</div>
