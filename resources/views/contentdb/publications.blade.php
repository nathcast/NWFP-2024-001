<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Publications') }}
        </h2>
    </x-slot>

    <livewire:list-publications  keyref="KeyRef" />

</x-guest-layout>
