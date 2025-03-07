<?php

namespace App\Livewire\Section;

use App\Models\Sponsor as ModelsSponsor;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Sponsors')]
class Sponsor extends Component
{
    public function render()
    {
        $sponsors = ModelsSponsor::where('is_active', true)->get();

        $groupedSponsors = $sponsors->groupBy('category');

        return view('livewire.section.sponsor', ['groupedSponsors' => $groupedSponsors]);
    }
}
