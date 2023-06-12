<div class="w-full shadow rounded bg-white">
    @if(isset($title))
    <div class="border-b text-sm px-2 py-1 text-center">{{$title}}</div>
    @endif
    {{$slot}}
</div>