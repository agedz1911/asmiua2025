<?php

namespace App\Livewire\Pages;

use App\Models\RegInfo;
use App\Models\Registration as ModelsRegistration;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Registration')]
class Registration extends Component
{
    public $regInfos;

    public function mount()
    {
        $this->regInfos = RegInfo::where('is_active', true)->orderBy('no_urut', 'asc')->get();
    }

    public function render()
    {
        $regs = ModelsRegistration::where('is_active', true)->get();
        $regLocals = $regs->where('wilayah_reg', 'indonesia')->where('category_reg', 'symposium');
        $regForeigns = $regs->where('wilayah_reg', 'foreign');
        $workshops = $regs->where('category_reg', 'workshop');
        $masterclass = $regs->where('category_reg', 'master class');
        return view('livewire.pages.registration', [
            'regInfos' => $this->regInfos, 
            'regLocals' => $regLocals, 
            'regForeigns' => $regForeigns,
            'workshops' => $workshops,
            'masterclass' => $masterclass
        ]);
    }
}
