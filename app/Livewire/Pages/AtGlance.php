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
    public $search = '';
    public $atglances;
    public $tigapuluh;
    public $satu;
    public $dua;
    public $tiga;

    public function resetSearch()
    {
        $this->search = '';
    }

    public function render()
    {
        $this->atglances = ScheduleSession::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('title_ses', 'like', '%' . $this->search . '%')
                        ->orWhere('room', 'like', '%' . $this->search . '%');
                });
            })
            ->get();

        $this->satu = $this->atglances->where('date', '2026-10-01')->sortBy('no_urut');
        $this->dua = $this->atglances->where('date', '2026-10-02')->sortBy('no_urut');
        $this->tiga = $this->atglances->where('date', '2026-10-03')->sortBy('no_urut');
        $this->tigapuluh = $this->atglances->where('date', '2026-09-30')->sortBy('no_urut');

        return view('livewire.pages.at-glance');
    }
}
