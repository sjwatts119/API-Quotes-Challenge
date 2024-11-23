<?php

namespace App\Services\Quote;

use App\Exceptions\FailedKanyeQuoteResponseException;
use App\Services\QuoteService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class KanyeQuoteService implements QuoteService
{
    protected function request(): Collection
    {
        $response = Cache::flexible(
            key: 'kanye-quotes',
            ttl: [now()->addHour(), now()->addDay()],
            callback: function () {
                $response = Http::get('https://api.kanye.rest/quotes');

                if($response->failed()) {
                    throw new FailedKanyeQuoteResponseException($response);
                }

                return $response->json();
        });

        return collect($response);
    }

    public function getQuotes(int $quoteCount = 5): Collection
    {
        return $this->request()->random($quoteCount);
    }
}
