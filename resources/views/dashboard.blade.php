<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="px-16 py-8 bg-white dark:bg-gray-800 shadow-xl rounded-lg">
                <ul class="list-disc">
                    @foreach($quotes as $quote)
                        <li class="text-4xl dark:text-gray-200">
                            {{ $quote }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
