<?php

namespace App\Livewire\Section;

use App\Models\CategoryPaper;
use App\Models\SchedulePaper;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;


#[Layout('components.layouts.index')]
class FreePaper extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $presentationGuides;
    public $categories;

    public $search = '';
    public $perPage = 50;
    public $selectedCategory = '';

    public function mount()
    {
        $this->categories = CategoryPaper::where('is_active', true)->orderBy('sort', 'asc')->get();
    }

    public function filterByCategory($category)
    {
        $this->selectedCategory = $category;
        $this->resetPage(); // Reset pagination ketika filter berubah
    }

    public function resetFilter()
    {
        $this->selectedCategory = '';
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = SchedulePaper::with('paperCategory')
            ->where('is_active', true);

        // Filter berdasarkan kategori jika dipilih
        if (!empty($this->selectedCategory)) {
            $query->whereHas('paperCategory', function ($q) {
                $q->where('name', $this->selectedCategory);
            });
        }

        // Filter berdasarkan search
        if (!empty($this->search)) {
            $query->where(function ($subQuery) {
                $subQuery->where('code_abstract', 'like', '%' . $this->search . '%')
                    ->orWhere('name_participant', 'like', '%' . $this->search . '%')
                    ->orWhere('title', 'like', '%' . $this->search . '%')
                    ->orWhere('institution', 'like', '%' . $this->search . '%')
                    ->orWhereHas('paperCategory', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%');
                    });
            });
        }

        return view('livewire.section.free-paper', [
            'paperSchedules' => $query->paginate($this->perPage),
        ]);
    }
}
