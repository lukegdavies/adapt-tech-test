@props(['active'])

@php
$classes = ($active ?? false)
            ? 'items-center p-2 bg-gray-800 rounded-md text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none transition duration-150 ease-in-out'
            : 'items-center p-2 text-sm font-medium leading-5 text-gray-500 dark:text-gray-400 hover:bg-gray-800 dark:hover:text-gray-300 hover:rounded-md hover:border-gray-300 dark:hover:border-gray-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
