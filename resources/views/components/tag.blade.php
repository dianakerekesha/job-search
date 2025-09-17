@props(['tag', 'size' => 'base'])
@php
    $classes = "bg-white/11 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";
    if($size === 'base') {
        $classes .= "px-5 py-1 text-2sm";
    }
    if($size === 'small') {
        $classes .= "px-3 py-1 text-1xs";
    }

@endphp
<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
