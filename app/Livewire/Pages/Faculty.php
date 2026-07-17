<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Faculties')]
class Faculty extends Component
{
    public $searchTerm = "";
    public bool $readyToLoad = false;

    public function loadData(): void
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        if (! $this->readyToLoad) {
            return view('livewire.pages.faculty', [
                'indofaculties' => collect(),
                'foreignfaculties' => collect(),
            ]);
        }

        $searchTerm = trim($this->searchTerm);
        $shouldFilterBySearch = mb_strlen($searchTerm) >= 3;
        $cacheKey = 'faculty-page:' . md5(mb_strtolower($searchTerm));

        [$indofaculties, $foreignfaculties] = Cache::remember($cacheKey, now()->addMinutes(2), function () use ($searchTerm, $shouldFilterBySearch) {
            $baseFacultySelect = ['id', 'name', 'country', 'image', 'description', 'no_urut'];
            $scheduleSelect = ['id', 'faculty_id', 'sesi_id', 'time_speaker', 'topic_title'];
            $sessionSelect = ['id', 'date', 'room', 'title_ses'];

            $queryIndo = ModelsFaculty::query()
                ->select($baseFacultySelect)
                ->where('is_active', true)
                ->where('country', 'Indonesia')
                ->with([
                    'schedules' => function ($query) use ($scheduleSelect, $sessionSelect) {
                        $query->select($scheduleSelect)
                            ->with([
                                'sesi' => function ($sessionQuery) use ($sessionSelect) {
                                    $sessionQuery->select($sessionSelect);
                                },
                            ]);
                    },
                ]);

            $queryForeign = ModelsFaculty::query()
                ->select($baseFacultySelect)
                ->where('is_active', true)
                ->where('country', '!=', 'Indonesia')
                ->with([
                    'schedules' => function ($query) use ($scheduleSelect, $sessionSelect) {
                        $query->select($scheduleSelect)
                            ->with([
                                'sesi' => function ($sessionQuery) use ($sessionSelect) {
                                    $sessionQuery->select($sessionSelect);
                                },
                            ]);
                    },
                ]);

            if ($shouldFilterBySearch) {
                $queryIndo->where('name', 'like', '%' . $searchTerm . '%');
                $queryForeign->where('name', 'like', '%' . $searchTerm . '%');
            }

            return [
                $queryIndo->orderBy('no_urut', 'asc')->get(),
                $queryForeign->orderBy('no_urut', 'asc')->get(),
            ];
        });

        return view('livewire.pages.faculty', ['indofaculties' => $indofaculties, 'foreignfaculties' => $foreignfaculties]);
    }
}
