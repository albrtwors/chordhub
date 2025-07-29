<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserSession;

use App\Http\Controllers\Auth\AuthViewsController;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthLogoutController;
use App\Http\Controllers\Auth\AuthSignController;
use App\Http\Controllers\Auth\AuthVerifySignController;
use App\Http\Controllers\Auth\AuthRestoreController;
use App\Http\Controllers\App\AppViewController;
use App\Http\Controllers\App\AppPfpChangeController;
use App\Http\Controllers\Song\SongViewsController;
use App\Http\Controllers\Song\SongCreateController;
use App\Http\Controllers\Song\SongDeleteController;
use Illuminate\Container\Attributes\Auth;


//////////////////// AUTH MODULE VIEWS /////////////////////

// Login
Route::get('/', [AuthViewsController::class, 'renderLogin'])->name('login');
Route::post('/login_validate', [AuthLoginController::class, 'loginUser'])->name('login_validate');

// Logout
Route::get('/logout', [AuthLogoutController::class, 'logout'])->name('logout');

// Sign Up
Route::get('/registro', [AuthViewsController::class, 'renderSign'])->name('sign');
Route::post('/sign_validate', [AuthSignController::class, 'signUser'])->name('sign_validate');

// Sign Up Code Validation
Route::get('/verificacion', [AuthViewsController::class, 'renderSignCodeValidation'])->name('sign_code');
Route::post('/sign_verify', [AuthVerifySignController::class, 'verifySignCode'])->name('sign_verify');

// Restore Password
Route::get('/restaurar', [AuthViewsController::class, 'renderRestore'])->name('restore');
Route::post('/restore_validate', [AuthRestoreController::class, 'sendRestoreMail'])->name('restore_validate');

//Restore Password Code Validation
Route::get('/restaurar/codigo', [AuthViewsController::class, 'renderRestoreCode'])->name('restore_code');
Route::post('/restore_code_validate', [AuthRestoreController::class, 'verifyRestoreCode'])->name('restore_code_validate');

// Restore Password Change
Route::get('/restaurar/cambiarcontraseña', [AuthViewsController::class, 'renderChangePass'])->name('restore_change');
Route::post('/restore_change_validate', [AuthRestoreController::class, 'changePassword'])->name('restore_change_validate');


//////////////////// APP MODULE VIEWS /////////////////////
//APP VIEWS
Route::get('/chordhub', [AppViewController::class, 'renderApp'])->name('app')->middleware(CheckUserSession::class);;
//APP PROFILE
Route::get('/chordhub/perfil', [AppViewController::class, 'renderProfile'])->name('app_profile')->middleware(CheckUserSession::class);;
Route::post('/app_change_pfp', [AppPfpChangeController::class, 'changePfp'])->name('app_change_pfp');


//////////////////// SONG MODULE VIEWS /////////////////////
// SONGS VIEWS
Route::get('/chordhub/canciones', [SongViewsController::class, 'renderSongs'])->name('songs')->middleware(CheckUserSession::class);

// SONG VIEW
Route::get('/chordhub/cancion/{id}', [SongViewsController::class, 'renderSong'])->name('song')->middleware(CheckUserSession::class);

// SONG CREATE VIEW
Route::get('/chordhub/canciones/crear', [SongViewsController::class, 'renderCreate'])->name('song_create')->middleware(CheckUserSession::class);;
Route::post('/song_create_validate', [SongCreateController::class, 'createSong'])->name('song_create_validate');

// SONG MODIFY VIEW
Route::get('/chordhub/canciones/modificar', [SongViewsController::class, 'renderModify'])->name('song_modify')->middleware(CheckUserSession::class);;

//SONG DELETE VIEWS
Route::get('/chordhub/canciones/eliminar', [SongViewsController::class, 'renderDelete'])->name('song_delete')->middleware(CheckUserSession::class);;
Route::delete('/chordhub/canciones/eliminar/{id}', [SongDeleteController::class, 'deleteSong'])->name('song_delete_validate');


//////////////////// LIST MODULE VIEWS /////////////////////

//////////////////// CHORD MODULE VIEWS /////////////////////