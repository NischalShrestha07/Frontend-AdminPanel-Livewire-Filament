<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServicePage extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'asc')->where('status', 1)->paginate(10);
        return view('livewire.show-service-page', compact('services'));
    }
}
