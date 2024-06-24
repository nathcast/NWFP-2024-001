<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Title of the page') }}
        </h2>
    </x-slot>

    <div>
        <h1 class="mt-0 h-12 content-center bg-nw-blue-50 px-4 text-2xl font-bold text-nw-blue-900">Heading 1</h1>
        <div class="p-3">
        </div>
        <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Heading 2</h2>


        <div class="p-3">

            <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Heading 3</h3>
            <h4 class="mt-4 font-semibold text-nw-blue-700">Heading 4 </h4>
        </div>
        <div class="p-3">

        </div>
    </div>

</x-guest-layout>
