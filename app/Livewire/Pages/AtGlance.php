<?php

namespace App\Livewire\Pages;

use App\Models\atGlance as ModelsAtGlance;
use App\Models\ScheduleSession;
use App\Models\Time;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Program at Glance')]
class AtGlance extends Component
{
    public $atglances;
    public $satu;
    public $dua;
    public $tiga;

    public function mount()
    {
        $this->atglances = ScheduleSession::all();
        $this->satu = $this->atglances->where('date', '2025-09-25')->sortBy('no_urut');
        $this->dua = $this->atglances->where('date', '2025-09-26')->sortBy('no_urut');
        $this->tiga = $this->atglances->where('date', '2025-09-27')->sortBy('no_urut');
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
