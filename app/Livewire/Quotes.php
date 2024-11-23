<?php

namespace App\Livewire;

use App\Facades\Quote;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class Quotes extends Component
{
    public Collection $quotes;

    public function mount(): void
    {
        $this->getQuotes();
    }

    public function getQuotes(): void
    {
        $this->quotes = Quote::getQuotes(5);
    }

    public function render(): View
    {
        return view('livewire.quotes')
            ->with([
                'quotes' => $this->quotes,
            ]);
    }
}
