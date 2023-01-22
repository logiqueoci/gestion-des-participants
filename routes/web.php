<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CandidatController;
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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/add-participant', function () {
    return view('/participant/add');
})->name('app_add_participant');

Route::get('/list-participant', function () {
    return view('/participant/list');
})->name('app_list_participant');

Route::get('/add-candidat', function () {
    return view('/candidat/add');
})->name('app_add_candidat');

Route::get('/list-candidat', function () {
    return view('/candidat/list');
})->name('app_list_candidat');*/



Route::get('/', function () {
    return view('home');
})->name('app_home');

Route::get('/add-participant', [ParticipantController::class, 'addParticipant'])->name('app_add_participant');

Route::post('/add-participant', [ParticipantController::class, 'saveParticipant'])->name('app_save_participant');

Route::get('/list-participant', [ParticipantController::class, 'getAllParticipant'])->name('app_list_participant');
