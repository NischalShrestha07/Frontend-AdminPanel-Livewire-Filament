<?php

namespace App\Livewire;

use App\Models\Faq as ModelsFaq;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        $faqs = ModelsFaq::orderBy('created_at', 'asc')->get();
        return view('livewire.faq', compact('faqs'));
    }
}
