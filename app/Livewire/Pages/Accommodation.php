<?php

namespace App\Livewire\Pages;

use App\Models\Accommodation as ModelsAccommodation;
use App\Models\RegInfo;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Accommodation')]
class Accommodation extends Component
{
    public $regInfos;

    public function mount()
    {
        $this->regInfos = RegInfo::where('is_active', true)->where('category', 'Accommodation')->orderBy('no_urut', 'asc')->get();
    }
    
    public function render()
    {
        $accommodations = ModelsAccommodation::where('is_active', true)->orderBy('hotel_star', 'desc')->get();
        return view('livewire.pages.accommodation', ['accommodations' => $accommodations]);
    }
}
