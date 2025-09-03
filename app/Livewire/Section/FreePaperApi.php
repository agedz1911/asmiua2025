<?php

namespace App\Livewire\Section;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class FreePaperApi extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';
    public $perPage = 10;
    public $selectedCategory = '';
    protected $items = [];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function filterByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->resetPage();
    }

    public function resetFilter()
    {
        $this->selectedCategory = '';
        $this->resetPage();
    }

    protected function fetchRaw(): array
    {
        $response = Http::timeout(15)->get(
            'https://expo.virconex-id.com/rest_server/abstract_asmiua2025/abstract_score'
        );

        if (!$response->successful()) {
            return [];
        }

        $payload = $response->json();
        return is_array($payload) ? ($payload['data'] ?? []) : [];
    }

    protected function normalizeAndUnique(array $list): array
    {
        $normalized = collect($list)
            ->filter(fn($row) => is_array($row))
            ->map(function ($r) {
                $noUrut  = $r['no_urut'] ?? null;
                $nama    = $r['nama_peserta'] ?? null;
                $judul   = $r['judul_abstract'] ?? null;
                $dec2    = isset($r['final_decision2']) ? (string)$r['final_decision2'] : '0';
                $dec     = $r['final_decision'] ?? null;

                $category = match ($dec2) {
                    '2' => 'Podium Presentation',
                    '3' => 'Podium Poster Presentation',
                    '4' => 'Unmoderated Poster',
                    '0' => $dec,
                    default => $dec,
                };

                return [
                    'no_urut'          => $noUrut,
                    'name_participant' => $nama,
                    'title'            => $judul,
                    'category'         => $category,
                ];
            });

        return $normalized
            ->filter(fn($row) => !empty($row['no_urut']))
            ->sortBy('no_urut', SORT_NATURAL)
            // ->unique('no_urut')
            ->values()
            ->all();
    }

    protected function fetchApi(): array
    {
        return cache()->remember('free_paper_api', now()->addMinutes(5), function () {
            $raw = $this->fetchRaw();
            return $this->normalizeAndUnique($raw);
        });
    }

    public function refreshData()
    {
        cache()->forget('free_paper_api');
        $this->items = [];  // agar refetch saat render berikutnya
        $this->resetPage();
    }

    protected function items(): Collection
    {
        if (empty($this->items)) {
            $this->items = $this->fetchApi();
        }
        return collect($this->items);
    }

    protected function applyFilters(Collection $items): Collection
    {
        if ($this->selectedCategory !== '') {
            $items = $items->filter(fn($r) => ($r['category'] ?? null) === $this->selectedCategory);
        }

        if ($this->search !== '') {
            $q = mb_strtolower($this->search);
            $items = $items->filter(function ($r) use ($q) {
                $no   = mb_strtolower((string)($r['no_urut'] ?? ''));
                $name = mb_strtolower((string)($r['name_participant'] ?? ''));
                $tit  = mb_strtolower((string)($r['title'] ?? ''));
                $cat  = mb_strtolower((string)($r['category'] ?? ''));
                return str_contains($no, $q) || str_contains($name, $q) || str_contains($tit, $q) || str_contains($cat, $q);
            });
        }

        return $items->values();
    }

    protected function paginate(Collection $items): LengthAwarePaginator
    {
        $page = $this->getPage();
        $perPage = (int) $this->perPage;
        $total = $items->count();

        $slice = $items->slice(($page - 1) * $perPage, $perPage)->values();

        return new LengthAwarePaginator(
            $slice,
            $total,
            $perPage,
            $page,
            ['path' => request()->url(), 'pageName' => 'page']
        );
    }

    public function render()
    {
        $filtered = $this->applyFilters($this->items());
        $paperSchedules = $this->paginate($filtered);

        return view('livewire.section.free-paper-api', [
            'paperSchedules' => $paperSchedules,
            'selectedCategory' => $this->selectedCategory,
            'search' => $this->search,
        ]);
    }
}
