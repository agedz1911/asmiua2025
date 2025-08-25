<?php

use App\Http\Controllers\Api\AtGlanceController;
use App\Livewire\Pages\Accommodation;
use App\Livewire\Pages\AtGlance;
use App\Livewire\Pages\Committee;
use App\Livewire\Pages\Faculty;
use App\Livewire\Pages\FreePaperSchedule;
use App\Livewire\Pages\GuidelineAbstract;
use App\Livewire\Pages\HomePage;
use App\Livewire\Pages\Registration;
use App\Livewire\Pages\Schedule;
use App\Livewire\Pages\Visiting;
use App\Livewire\Pages\WelcomeMessage;
use App\Livewire\Section\Sponsor;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
// Route::get('/welcome', function() {
//     return view('welcome');
// });
Route::get('/welcome-message', WelcomeMessage::class);
Route::get('/organizing-committee', Committee::class);
Route::get('/program-at-glance', AtGlance::class);
Route::get('/scientific-schedule', Schedule::class);
Route::get('/registration', Registration::class);
Route::get('/submission', GuidelineAbstract::class);
Route::get('/presentation-schedule', FreePaperSchedule::class);
Route::get('/faculties', Faculty::class);
Route::get('/accommodation', Accommodation::class);
Route::get('/sponsors', Sponsor::class);
Route::get('/visiting', Visiting::class);