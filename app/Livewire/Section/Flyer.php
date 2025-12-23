<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Flyer extends Component
{
    public function render()
    {
        $flyers = \App\Models\Flyer::where('is_active', true)->orderBy('no_urut', 'asc')->get();
        return view('livewire.section.flyer', [
            'flyers' => $flyers,
        ]);
    }
}
