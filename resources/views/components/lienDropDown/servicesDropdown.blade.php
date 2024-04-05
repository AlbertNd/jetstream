@props(['align' => 'left', 'width' => '32', 'contentClasses' => 'py-1 bg-white', 'dropdownClasses' => ''])

@php
switch ($align) {
case 'left':
$alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right';
break;
case 'top':
$alignmentClasses = 'origin-top';
break;
case 'none':
case 'false':
$alignmentClasses = '';
break;
case 'right':
default:
$alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0 ';
break;
}

switch ($width) {
case '32':
$width = 'w-32';
break;
}
@endphp

{{-- Le boutton avec le nom du connecter --}}

<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>
    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" {{-- La classe du contenant profil et log out --}} class="absolute z-50 mt-2 lg:right-0 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }} {{ $dropdownClasses }}" style="display: none;" @click="open = false">
        <div class=" ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>