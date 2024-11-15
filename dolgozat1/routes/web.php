<?php

use App\HTTP\Controllers\MűfajKontroller;
use App\HTTP\Controllers\KönyvController;
use App\HTTP\Controllers\KölcsönzésKontroller;

Route::get('/new-genre',[MűfajKontroller::class, 'create'])->name('műfaj.create');
Route::post('/new-genre',[MűfajKontroller::class, 'store']);

Route::get('/new-könyv',[KönyvController::class, 'create'])->name('könyv.create');
Route::post('/new-könyv',[KönyvController::class, 'store']);

Route::get('könyv', [KönyvController::class, 'index'])->name('könyv.index');
Route::get('/könyv/könyv/{id}', [KölcsönzésKontroller::class,'create'])->name('kölcsönzés.create');
Route::post('/new-kölcsönzés',[KölcsönzésKontroller::class, 'store']);

