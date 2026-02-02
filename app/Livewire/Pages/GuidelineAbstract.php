<?php

namespace App\Livewire\Pages;

use App\Models\GuidelineAbstract as ModelsGuidelineAbstract;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Submission')]
class GuidelineAbstract extends Component
{
    public function submitAbstract()
    {
        return redirect()->away('https://expo.virconex-id.com/abstract/asmiua2026/');
    }

    public function uploadVideoFlyer()
    {
        return redirect()->away('https://expo.virconex-id.com/submit_video/edu_video_asmiua2026/');
    }

    public function render()
    {
        $guidelineAbstracts = ModelsGuidelineAbstract::where('category', 'Abstract Free Paper')->orderBy('no_urut', 'asc')->get();
        $guidelineVideos = ModelsGuidelineAbstract::where('category', 'Abstract Video')->orderBy('no_urut', 'asc')->get();
        $eduvideos = ModelsGuidelineAbstract::where('category', 'Educative Video')->orderBy('no_urut', 'asc')->get();
        return view('livewire.pages.guideline-abstract', ['guidelineAbstracts' => $guidelineAbstracts, 'guidelineVideos' => $guidelineVideos, 'eduvideos' => $eduvideos]);
    }
}
