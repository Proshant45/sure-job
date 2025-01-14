@props(['tag', 'size'=>'base'])

@php
    $classes="bg-white/10 hover:bg-white/25 transition-colors duration-300 font-bold rounded-xl ";
    if ($size == 'base') {
        $classes .= " px-2 py-1 text-sm";

    }
    if ($size == 'small') {
        $classes .= " px-2 py-1 text-2xs";
    }

@endphp
<a class="{{$classes}}" href="/tags/{{$tag->name ?? 'No Tag'}}">{{ $tag->name ?? 'No Tag' }}</a>

{{-- <a class= "{{$classes}}" href="#">{{$tag->name}}</a> --}}

