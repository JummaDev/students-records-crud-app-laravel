<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\DropDown;
<<<<<<< HEAD
use App\Livewire\Home;
=======
>>>>>>> b5fb768e7385cb5970cdab48517870ed71d87d47
use App\Livewire\Students\StudentCreate;
use App\Livewire\Students\StudentEdit;
use App\Livewire\Students\StudentList;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Students Routes
<<<<<<< HEAD
Route::get('/', Home::class)->name('home');
=======
>>>>>>> b5fb768e7385cb5970cdab48517870ed71d87d47
Route::get('/students', StudentList::class)->name('students.index');
Route::get('/students/create', StudentCreate::class)->name('students.create');
Route::get('/students/{id}/edit', StudentEdit::class)->name('students.edit');

// Auth Routes
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::get('/register', Register::class)->name('register')->middleware('guest');

// Auth grouping
Route::middleware('auth')->group(function () {
    Route::get('/students', StudentList::class)->name('students.index');
    // Add another route here
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/todo', Todos::class);
Route::get('/counter', action: Counter::class);
Route::get('/dropdown', DropDown::class);