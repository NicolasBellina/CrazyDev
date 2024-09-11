@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out';

$styles = ($active ?? false)
            ? 'border-color: #EEEEEE; color: #EEEEEE'
            : 'border-color: transparent; color: #EEEEEE'

@endphp

<a {{ $attributes->merge(['class' => $classes, 'style' => $styles]) }}>
    {{ $slot }}
</a>
