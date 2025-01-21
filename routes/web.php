<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Todos;
use App\Livewire\Counter;
use App\Livewire\PasswordChecker;
use App\Livewire\CreatePost;
use App\Livewire\ShowPost;
use App\Livewire\PopUpViaTeleport;
use App\Livewire\StreamComponent;
use App\Livewire\ChatApp;
use App\Livewire\UpdatePost;
use App\Livewire\PgDataTable;
use App\Livewire\Auth\Authentication;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',Authentication::class);
Route::get('/ChatApp',ChatApp::class);

Route::get('/logout', [Authentication::class,'logout'])->name('logout');
// Route::get('/auth', Authentication::class);
