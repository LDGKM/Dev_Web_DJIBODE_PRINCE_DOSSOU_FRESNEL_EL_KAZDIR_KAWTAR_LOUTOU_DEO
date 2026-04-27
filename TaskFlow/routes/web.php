<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*Pages publiques*/

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

/*Dashboard (protégé)*/

Route::get('/dashboard', function () {
    return view('dashboard', [
        'tasksToday' => 5,
        'lateTasks' => 2,
        'progress' => 60
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

/*Tasks (protégé)*/

Route::middleware('auth')->group(function () {

    Route::get('/tasks', function () {

        $tasks = [
            (object)[
                'title' => 'Projet Laravel',
                'priority' => 'Haute',
                'status' => 'En cours',
                'due_date' => '2026-05-01'
            ],
            (object)[
                'title' => 'UI Bootstrap',
                'priority' => 'Moyenne',
                'status' => 'À faire',
                'due_date' => '2026-05-03'
            ],
        ];

        return view('tasks.index', compact('tasks'));
    })->name('tasks.index');

    Route::view('/tasks/create', 'tasks.create')->name('tasks.create');

});

/*Profile (Breeze)*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*Auth routes (login/register)*/

require __DIR__.'/auth.php';
