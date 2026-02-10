<?php

use App\Livewire\Tarefa\Create;
use App\Livewire\Tarefa\Index;
use Illuminate\Support\Facades\Route;

Route::get('tarefa/create', Create::class)->name('tarefa.create');
Route::get('tarefa', Index::class)->name('tarefa.index');