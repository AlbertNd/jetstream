@props(['href'])

@php
    $classes ='w-full flex flex-col items-center rounded  shadow-md transition duration-300 ease-in-out hover:shadow-teal-700 hover:scale-105 ';
@endphp

<a href="{{ $href }}" {{$attributes -> merge(['class' => $classes ])}}">
    <div>
        <h1 class="pt-1 font-thin font-serif text-xs uppercase text-teal-700">
            {{ $titre }}
        </h1>
    </div>
    <div class="">
        {{ $icon }}
    </div>
</a>