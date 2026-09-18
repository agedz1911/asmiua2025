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
        $sponsors = ModelsSponsor::where('is_active', true)->orderBy('no_urut', 'asc')->get();

        $groupedSponsors = $sponsors->groupBy('category');
        $orderedCategories = ['Platinum Sponsor', 'Gold Sponsor', 'Silver Sponsor', 'Exhibitors and Scientific Grant'];
        $sortedGroupedSponsors = $groupedSponsors->sortBy(function ($group, $key) use ($orderedCategories) {
            return array_search($key, $orderedCategories);
        });
        return view('livewire.section.sponsor', ['sortedGroupedSponsors' => $sortedGroupedSponsors]);
    }
}
