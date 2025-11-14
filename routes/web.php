<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LoginComponent;
use App\Livewire\HomeComponent;

Route::get('/', HomeComponent::class)->middleware('auth')->name('home');

Route::get('/login', LoginComponent::class)->name('login');