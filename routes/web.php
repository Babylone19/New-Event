<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EntrepriseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get("/users", [UserController::class,'users']);
    Route::get("/",[HomeController::class,'show_welcome'])->name("welcome");
    Route::get("/about",[HomeController::class,'show_about'])->name("about");
    Route::get("/contact",[HomeController::class,'show_contact'])->name("contact");

    Route::get("/entreprises",[EntrepriseController::class,"index"])->name("entreprises.index");
    Route::get("/entreprises/create",[EntrepriseController::class,"create"])->name("entreprises.create");
    Route::post("/entreprises",[EntrepriseController::class,"store"])->name("entreprises.store");
    Route::get("/entreprises/{entrprise}",[EntrepriseController::class,"show"])->name("entreprises.show");
    Route::get("/entreprises/{entreprise}/edit",[EntrepriseController::class,"edit"])->name("entreprises.edit");
    Route::put("/entreprises/{entreprise}",[EntrepriseController::class,"update"])->name("entreprises.update");
    Route::delete("/entreprises/{entreprise}",[EntrepriseController::class,"destroy"])->name("entreprises.destroy");
});
