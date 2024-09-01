<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AnnonceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ViewController::class,'showindex'])->name('index');


/*electronic*/
Route::get('/Smartphone & mobile',[ViewController::class,'smartphone'])->name('smartphone');
Route::get('/Tablette',[ViewController::class,'tablet'])->name('tablette');
Route::get('/Pc-Portable',[ViewController::class,'laptop'])->name('pcportable');
Route::get('/Pc-bureau',[ViewController::class,'pcb'])->name('pcbureau');
Route::get('/Smartwatch',[ViewController::class,'smartwatch'])->name('smartwatch');
Route::get('/Ecran',[ViewController::class,'ecran'])->name('ecran');
/*household*/
Route::get('/Washing-machine',[ViewController::class,'washingmachine'])->name('washingmachine');
Route::get('/Oven',[ViewController::class,'oven'])->name('oven');
Route::get('/mixer', [ViewController::class, 'mixer'])->name('mixer');
Route::get('/dishwasher', [ViewController::class, 'dishwasher'])->name('dishwasher');
Route::get('/refrigetrator', [ViewController::class, 'refrigerator'])->name('refrigerator');
Route::get('/coffee', [ViewController::class, 'coffee'])->name('coffee');
Route::get('/waterheater', [ViewController::class, 'waterheater'])->name('waterheater');
Route::get('/air', [ViewController::class, 'air'])->name('air');
/* accessories ordinateur*/
Route::get('/hautparleur', [ViewController::class, 'hautparleur'])->name('hautparleur');
Route::get('/ecouteur', [ViewController::class, 'ecouteur'])->name('ecouteur');
Route::get('/clavier', [ViewController::class, 'clavier'])->name('clavier');
/*components mobile*/
Route::get('/lcd', [ViewController::class, 'lcd'])->name('lcd');
Route::get('/connectors', [ViewController::class, 'connectors'])->name('connectors');
Route::get('/batterie', [ViewController::class, 'batterie'])->name('batterie');
Route::get('/covers', [ViewController::class, 'covers'])->name('covers');
Route::get('/flexcables', [ViewController::class, 'flexcables'])->name('flexcables');
Route::get('/simslots', [ViewController::class, 'simslots'])->name('simslots');
Route::get('/cartemere', [ViewController::class, 'cartemere'])->name('cartemere');
/*components ordinateur*/
Route::get('/disquedur', [ViewController::class, 'disquedur'])->name('disquedur');
Route::get('/chargeurpc', [ViewController::class, 'chargeurpc'])->name('chargeurpc');
Route::get('/batteriepc', [ViewController::class, 'batteriepc'])->name('batteriepc');
Route::get('/processeur', [ViewController::class, 'processeur'])->name('processeur');
Route::get('/memoireram', [ViewController::class, 'memoireram'])->name('memoireram');
Route::get('/ventilateur', [ViewController::class, 'ventilateur'])->name('ventilateur');
Route::get('/bloc', [ViewController::class, 'bloc'])->name('bloc');
Route::get('/cartemerepc', [ViewController::class, 'cartemerepc'])->name('cartemerepc');
Route::get('/cartegraphique', [ViewController::class, 'cartegraphique'])->name('cartegraphique');
Route::get('/cartenetwork', [ViewController::class, 'cartenetwork'])->name('cartenetwork');
/* accessories ordinateur*/
Route::get('/adapters', [ViewController::class, 'adapters'])->name('adapters');
Route::get('/powerbanks', [ViewController::class, 'powerbanks'])->name('powerbanks');
Route::get('/carchargers', [ViewController::class, 'carchargers'])->name('carchargers');
Route::get('/cablemanagement', [ViewController::class, 'cablemanagement'])->name('cablemanagement');
Route::get('/cases', [ViewController::class, 'cases'])->name('cases');
Route::get('/screenprotectors', [ViewController::class, 'screenprotectors'])->name('screenprotectors');




Route::get('/annonce/create', [AnnonceController::class, 'create'])->name('annonce.create')->middleware('auth');
Route::post('/annonce', [AnnonceController::class, 'store'])->name('annonce.store')->middleware('auth');

Route::get('/detail/{id}', [ViewController::class, 'detail'])->name('detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
