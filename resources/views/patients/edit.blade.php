<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Edit Patient') }}
        </h2>
    </x-slot>

    <x-form :patient="$patient" />

</x-app-layout>
