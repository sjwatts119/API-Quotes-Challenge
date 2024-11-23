<?php

namespace App\Services\Quote;

use App\Services\QuoteService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class KanyeQuoteService implements QuoteService
{
    protected function request(): Collection
    {
        $quotes = Cache::flexible(
            key: 'kanye-quotes',
            ttl: [now()->addHour(), now()->addDay()],
            callback: function () {
                return Http::get('https://api.kanye.rest/quotes')->json();
        });

        return collect($quotes);
    }

    public function getQuotes(int $quoteCount = 5): Collection
    {
        return $this->request()->random($quoteCount);
    }
}
