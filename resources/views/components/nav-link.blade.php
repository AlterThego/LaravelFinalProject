@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'border-r-4 border-primary focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
