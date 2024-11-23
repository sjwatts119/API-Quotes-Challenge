<?php

namespace App\Services;

use Illuminate\Support\Collection;

interface QuoteService
{
    public function getQuotes(int $quoteCount): Collection;
}
