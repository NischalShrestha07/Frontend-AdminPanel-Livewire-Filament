<?php

use App\Livewire\Faq;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicePage');
Route::get('/services/{id}', ShowService::class)->name('servicePage.index');
Route::get('/services', ShowServicePage::class)->name('servicePage');


Route::get('/team', ShowTeamPage::class)->name('teamPage');
Route::get('/faq', Faq::class)->name('faq');
