<?php

namespace App\Livewire\Pages;

use App\Models\ScheduleSession;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('ASMIUA - Program at Glance')]
class AtGlance extends Component
{
    private const DAYS = [
        '2026-09-30' => [
            'label' => '30 September',
            'rooms' => ['Empire 1', 'Empire 2', 'Empire 3', 'Empire 4', 'Empire 5', 'Imperium 1,2,3', 'Meridien 1', 'Meridien 2'],
        ],
        '2026-10-01' => [
            'label' => '1 October',
            'rooms' => ['Pasteur 1&2 Convention', 'Pasteur 3 Convention', 'Empire 1', 'Empire 2'],
        ],
        '2026-10-02' => [
            'label' => '2 October',
            'rooms' => ['Pasteur 1&2 Convention', 'Pasteur 3 Convention', 'Imperium 1,2,3', 'Empire 1', 'Empire 2'],
        ],
        '2026-10-03' => [
            'label' => '3 October',
            'rooms' => ['Pasteur 1&2 Convention', 'Pasteur 3 Convention', 'Empire 1', 'Empire 2', 'Imperium 1,2,3'],
        ],
    ];

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
            ->select([
                'id',
                'category_sesi',
                'title_ses',
                'date',
                'time',
                'room',
                'moderator',
                'no_urut',
            ])
            ->with('schedules:id,sesi_id,time_speaker,topic_title,speaker')
            ->when(trim($this->search) !== '', function ($query) {
                $search = trim($this->search);

                $query->where(function ($query) use ($search) {
                    $query->where('title_ses', 'like', '%' . $search . '%')
                        ->orWhere('room', 'like', '%' . $search . '%');
                });
            })
            ->orderBy('date')
            ->orderBy('no_urut')
            ->get();

        $sessionsByDate = $this->atglances->groupBy('date');
        $this->tigapuluh = $sessionsByDate->get('2026-09-30', collect());
        $this->satu = $sessionsByDate->get('2026-10-01', collect());
        $this->dua = $sessionsByDate->get('2026-10-02', collect());
        $this->tiga = $sessionsByDate->get('2026-10-03', collect());

        $days = collect(self::DAYS)->map(function (array $day, string $date) use ($sessionsByDate) {
            $day['sessionsByRoom'] = $sessionsByDate->get($date, collect())->groupBy('room');

            return $day;
        });

        return view('livewire.pages.at-glance', compact('days'));
    }
}
