<?php
$button_color = "";
switch($type){
    case "green":
        $button_color = 'bg-green-500';
        break;
    case "red":
        $button_color = 'bg-red-500';
        break;
    case "gray":
        $button_color = 'bg-gray-500';
        break;
}
?>

<button class="
relative overflow-hidden rounded-md px-5 py-2.5 text-white duration-300
[transition-timing-function:cubic-bezier(0.175,0.885,0.32,1.275)] active:translate-y-1 active:scale-x-110 active:scale-y-90
 {{ $button_color }}"
onclick="location.href='{{ route($route) }}' "
>
    {{ $name }}
</button>
