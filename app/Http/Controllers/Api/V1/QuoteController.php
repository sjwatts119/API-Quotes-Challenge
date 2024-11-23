<?php

namespace App\Http\Controllers\Api\V1;

use App\Facades\Quote;
use App\Http\Resources\QuoteResource;

class QuoteController
{
    public function index(): QuoteResource
    {
        return new QuoteResource(Quote::getQuotes());
    }
}
