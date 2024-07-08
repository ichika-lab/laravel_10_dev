<div class="container-fluid my-3">
    <h3 class="text-white bg-dark rounded-top m-5">
        <div class="flex">
            <div class="p-3 flex-1 content-center">{{ $title }}</div>
            <div class="p-3 flex-1 text-right">{{$xxx}}</div>
        </div>
    </h3>
    <div class="border border-dark rounded-bottom p-2">
        {{ $slot }}
    </div>
</div>
