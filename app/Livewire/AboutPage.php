<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class AboutPage extends Component
{
    public function render()
    {
        $members = Member::orderBy('name', 'asc')->get();
        return view('livewire.about-page', compact('members'));
    }

    
}
