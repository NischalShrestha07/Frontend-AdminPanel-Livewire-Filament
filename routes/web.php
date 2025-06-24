<?php

use App\Livewire\AboutPage;
use App\Livewire\BlogDetail;
use App\Livewire\ContactUs;
use App\Livewire\Faq;
use App\Livewire\ShowBlog;
use App\Livewire\ShowContactPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;
use App\Models\Article;
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
Route::get('/blogs', ShowBlog::class)->name('blog');
Route::get('/blogs/{id}', BlogDetail::class)->name('blog.index');

Route::get('/about', AboutPage::class)->name('about');
Route::get('/contactus', ShowContactPage::class)->name('contactus');
