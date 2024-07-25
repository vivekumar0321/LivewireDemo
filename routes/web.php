<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\CounterComponent;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',Home::class);
Route::get('/about',About::class);
Route::get('/contact',Contact::class);
Route::get('/counter',CounterComponent::class);


