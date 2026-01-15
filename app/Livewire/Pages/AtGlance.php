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

    public $duadelapan;
    public $duasembilan;
    public $tigapuluh;
    public $tigapuluhsatu;
    public $satu;


    public function mount()
    {
        $this->atglances = ScheduleSession::all();
<<<<<<< HEAD
        $this->satu = $this->atglances->where('date', '2025-09-25')->sortBy('no_urut');
        $this->dua = $this->atglances->where('date', '2025-09-26')->sortBy('no_urut');
        $this->tiga = $this->atglances->where('date', '2025-09-27')->sortBy('no_urut');
=======
        $this->duaPuluhLima = $this->atglances->where('date', '2025-09-25')->sortBy('no_urut');
        $this->duaPuluhEnam = $this->atglances->where('date', '2025-09-26')->sortBy('no_urut');
        $this->duaPuluhTujuh = $this->atglances->where('date', '2025-09-27')->sortBy('no_urut');

        $this->duadelapan = $this->atglances->where('date', '2025-10-28')->sortBy('no_urut');
        $this->duasembilan = $this->atglances->where('date', '2025-10-29')->sortBy('no_urut');
        $this->tigapuluh = $this->atglances->where('date', '2025-10-30')->sortBy('no_urut');
        $this->tigapuluhsatu = $this->atglances->where('date', '2025-10-31')->sortBy('no_urut');
        $this->satu = $this->atglances->where('date', '2025-11-01')->sortBy('no_urut');
>>>>>>> 0c7f8abe9566543b850cd23ec2c4883b74874075
    }

    public function render()
    {
        return view('livewire.pages.at-glance');
    }
}
