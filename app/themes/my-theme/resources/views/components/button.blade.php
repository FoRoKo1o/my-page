@props(['variant' => 'default'])

@php
$classes = match($variant) {
    'primary' => 'btn bg-green-500 text-white',
    'secondary' => 'btn bg-gray-300 text-black',
    default => 'btn bg-blue-500 text-white',
};
@endphp

<button {{ $attributes->merge(['class' => $classes . ' px-4 py-2 rounded-full hover:opacity-90']) }}>
    {{ $slot }}
</button>
