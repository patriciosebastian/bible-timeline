<?php

use App\Livewire\ApocryphaTimeline;
use App\Livewire\DeadSeaScrollsTimeline;
use App\Livewire\MainPageTimeline;
use App\Livewire\NewTestamentTimeline;
use App\Livewire\OldTestamentTimeline;
use App\Livewire\Sources;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Volt::route('/', 'users.index');

// Test route
Route::get('/test', function () {
    return view('livewire.test-component');
});

// App routes
Route::get('/', MainPageTimeline::class)->name('main-page-timeline');
Route::get('/apocryhpa-timeline', ApocryphaTimeline::class)->name('apocrypha-timeline');
Route::get('/dead-sea-scrolls-timeline', DeadSeaScrollsTimeline::class)->name('dead-sea-scrolls-timeline');
Route::get('/new-testament-timeline', NewTestamentTimeline::class)->name('new-testament-timeline');
Route::get('/old-testament-timeline', OldTestamentTimeline::class)->name('old-testament-timeline');
// sources, references, works cited?
Route::get('/sources', Sources::class)->name('sources');
