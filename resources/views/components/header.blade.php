@props(['genres'=>[]])
<header>
    <div class="bg-white shadow m-[2px] flex-col space-y-4">
        @guest()
            <x-status-bar href="/login">login</x-status-bar>
        @endguest

        @auth()
            <x-status-bar href="/logout">Welcome </x-status-bar>
        @endauth

        <div class="max-w-7xl  sm:px-6 lg:px-8">
            <x-title/>
        </div>

    </div>

    <x-nav :$genres></x-nav>
</header>
