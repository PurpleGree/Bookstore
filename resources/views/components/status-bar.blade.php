<div class="bg-gray-200 px-2 pb-[2px]">
    <a  {{$attributes(["class"=>"flex gap-x-2 rounded-b max-w-20 border-2 border-black/10 py-1"])}}>
        <span class="material-symbols-outlined">login </span>  {{--login icon--}}
        <span>{{$slot}}</span>
    </a>
</div>
