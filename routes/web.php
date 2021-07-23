<?php
// use Livewire\Component;
// use Livewire\LivewireManager;
// use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');
Route::get('livewire/message/sidebar', \App\Http\Livewire\Sidebar::class);
Route::post('livewire/message/store', \App\Http\Livewire\Store::class);
Route::post('livewire/message/item', \App\Http\Livewire\Item::class);
Route::get('{category}', \App\Http\Livewire\Store::class);
