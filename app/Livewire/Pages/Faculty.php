<?php

namespace App\Livewire\Pages;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('ASMIUA - Faculties')]
class Faculty extends Component
{
    public $searchTerm = "";

    public function render()
    {
        // $indofaculties = ModelsFaculty::where('is_active', true)->where('country', 'indonesia')->with('schedules')->orderBy('name', 'asc')->get();
        // $foreignfaculties = ModelsFaculty::where('is_active', true)->where('country', '!=', 'indonesia')->with('schedules')->orderBy('name', 'asc')->get();
        $faculties = ModelsFaculty::where('is_active', true)->with('schedules')->orderBy('no_urut', 'asc')->get();

        $indofaculties = $faculties->where('country', 'Indonesia')
            ->filter(function ($faculty) {
                if (strlen($this->searchTerm) >= 3) {
                    return str_contains(strtolower($faculty->name), strtolower($this->searchTerm));
                }
                return true;
            });

        $foreignfaculties = $faculties->where('country', '!=', 'Indonesia')
            ->filter(function ($faculty) {
                if (strlen($this->searchTerm) >= 3) {
                    return str_contains(strtolower($faculty->name), strtolower($this->searchTerm));
                }
                return true;
            });

        return view('livewire.pages.faculty', ['indofaculties' => $indofaculties, 'foreignfaculties' => $foreignfaculties]);
    }
}
