<?php

use App\Livewire\Pages\Committee;
use App\Livewire\Pages\GuidelineAbstract;
use App\Livewire\Pages\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/organizing-committee', Committee::class);


Route::get('/submission', GuidelineAbstract::class);
