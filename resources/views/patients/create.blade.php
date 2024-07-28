<x-app-layout>
     <!-- Header slot definition within the application layout component -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Create Patient') }}
        </h2>
    </x-slot>

    <!-- Form component for creating a new patient -->
    <x-form />

</x-app-layout>