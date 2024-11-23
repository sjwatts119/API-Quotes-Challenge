<div>
    <div class="mb-4">
        <flux:button wire:click="getQuotes" variant="filled">Refresh</flux:button>
    </div>
    <div class="relative px-16 py-8 bg-white dark:bg-gray-800 shadow-xl rounded-lg">
        <ul class="list-disc">
            @foreach($quotes as $quote)
                <li class="text-3xl dark:text-gray-200">
                    {{ $quote }}
                </li>
            @endforeach
        </ul>
    </div>
</div>

