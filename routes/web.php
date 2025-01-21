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
Route::get('/todos',Todos::class);

Route::get('/counter',Counter::class)->name('counter');
Route::get('/password',PasswordChecker::class);

Route::get('/create_post',CreatePost::class);
Route::get('/show_post',ShowPost::class)->name('show_post');

Route::get('/openModel',PopUpViaTeleport::class);
Route::get('/stream',StreamComponent::class);
Route::get('/ChatApp',ChatApp::class);
Route::get('/edit/{postId}',CreatePost::class)->name('editPost');
Route::get('/Update/{postId}',UpdatePost::class)->name('update-post');
Route::get('/Pgdatatable',PgDataTable::class);
Route::get('/logout', [Authentication::class,'logout'])->name('logout');
// Route::get('/auth', Authentication::class);
