<button class="
relative overflow-hidden rounded-md bg-{{ $color }}-600 px-5 py-2.5 text-white duration-300
[transition-timing-function:cubic-bezier(0.175,0.885,0.32,1.275)] active:translate-y-1 active:scale-x-110 active:scale-y-90"
onclick="location.href='{{ route($route) }}' "
>
    {{ $name }}
</button>
