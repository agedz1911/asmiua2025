<?php

namespace App\Livewire\Pages;

use App\Models\RunningText;
use App\Models\Sponsor;
use App\Models\WelcomeMessage;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA')]
class HomePage extends Component
{
    public function render()
    {
        $runnings = RunningText::all();
        $sponsors = Sponsor::where('is_Active', true)->orderBy('no_urut', 'asc')->take(10)->get();
        $messages = WelcomeMessage::where('is_active', true)->orderby('no_urut', 'asc')->get();
        return view('livewire.pages.home-page', [
            'sponsors' => $sponsors, 
            'messages' => $messages,
            'runnings' => $runnings
        ]);
    }
}
