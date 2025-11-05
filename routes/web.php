<?php
use App\Http\Controllers\Api;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserSession;
use App\Http\Middleware\SaveLastPage;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\App\AppViewController;
use App\Http\Controllers\Auth\AuthSignController;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\Auth\AuthViewsController;
use App\Http\Controllers\List\ListViewsController;

use App\Http\Controllers\SongBook\SongBookController;
use App\Http\Controllers\Song\SongViewsController;
use App\Http\Controllers\Auth\AuthLogoutController;


use App\Http\Controllers\List\ListCreateController;
use App\Http\Controllers\List\ListDeleteController;
use App\Http\Controllers\List\ListModifyController;
use App\Http\Controllers\Song\SongCreateController;

use App\Http\Controllers\Song\SongDeleteController;
use App\Http\Controllers\Song\SongModifyController;
use App\Http\Controllers\App\AppPfpChangeController;
use App\Http\Controllers\Auth\AuthRestoreController;
use App\Http\Controllers\Files\FileController;


use App\Http\Controllers\Chord\ChordViewsController;
use App\Http\Controllers\Chord\ChordCreateController;

use App\Http\Controllers\Search\SearchListController;
use App\Http\Controllers\Search\SearchSongController;
use App\Http\Controllers\Auth\AuthVerifySignController;
use App\Http\Controllers\Chatbot\ChatbotController as ChatbotController;

use App\Http\Controllers\Chord\ChordController;
use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Notification\NotificationController;
use App\Http\Controllers\Script\ScriptController;
use App\Http\Controllers\Search\SearchUsersAdminController;
use App\Http\Controllers\Song\SongController;
use App\Http\Controllers\SongList\SongListController;
use App\Http\Controllers\TonalityController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Cors;
use App\Http\Middleware\DeleteAt60Mins;
use App\Livewire\App\Dashboard;
use App\Livewire\App\News;
use Illuminate\Notifications\Notification;

Route::get('/api', [Api::class, 'getSongs']);
Route::get('/bienvenido', function (){
    return view('landing.landing');
})->name('landing');
// //////////////////// AUTH MODULE VIEWS /////////////////////

// Login

Route::middleware([DeleteAt60Mins::class])->group(function(){
    Route::get('/', [AuthViewsController::class, 'renderLogin'])->name('login');
    Route::post('/login_validate', [AuthLoginController::class, 'loginUser'])->name('login_validate');

    // Logout
    Route::get('/logout', [AuthLogoutController::class, 'logout'])->name('logout');

    // Sign Up
    Route::get('/registro', [AuthViewsController::class, 'renderSign'])->name('sign');
    Route::post('/sign_validate', [AuthSignController::class, 'signUser'])->name('sign_validate');

    // Sign Up Code Validation
    Route::get('/verificacion-usuario/{uid}',[AuthViewsController::class, 'renderSignCodeVal'])->name('sign_codeVal');
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
});


///////////// SESSION MIDDLEWARE
Route::middleware([CheckUserSession::class, SaveLastPage::class])->group(function () {
    //////////////////// APP MODULE VIEWS /////////////////////
    //APP VIEWS
    Route::get('/chordhub', [AppViewController::class, 'renderApp'])->name('app');
    Route::get('/novedades', [AppViewController::class, 'newsIndex'])->name('news.index');  

    //APP PROFILE
    Route::get('/chordhub/perfil', [AppViewController::class, 'renderProfile'])->name('app_profile');
    Route::post('/app_change_pfp', [AppPfpChangeController::class, 'changePfp'])->name('app_change_pfp');

    
    
    //////////////////// SONG MODULE VIEWS /////////////////////
    // SONGS VIEWS
    Route::resource('/canciones', SongController::class);
    Route::get('/chordhub/canciones', [SongViewsController::class, 'renderSongs'])->name('songs');
    Route::get('/cancion/eliminar', [SongController::class, 'indexDeletes'])->name('songDelete.index');
    Route::get('/cancion/editar', [SongController::class, 'indexEdits'])->name('songEdits.index');
    
    // SONG MODIFY VIEW
    Route::get('/chordhub/canciones/modificar', [SongViewsController::class, 'renderModify'])->name('song_modify');



    //////////////////// LIST MODULE VIEWS /////////////////////
    Route::resource('/cancioneros', FileController::class);
    Route::get('/cancionero/modificar', [FileController::class, 'indexEdits'])->name('filesEdits.index');
    Route::get('/cancionero/eliminar', [FileController::class, 'indexDelete'])->name('filesDelete.index');
    Route::get('/cancionero/{file_id}/cancion/{song_id}', [FileController::class, 'songInFile'])->name('songInFile');

    Route::get('/buscador/cancioneros', [FileController::class, 'searchByName'])->name('cancioneros.search');
    Route::get('/chordhub/listas', [ListViewsController::class, 'renderLists'])->name('lists');
    Route::get('/chordhub/lista/{id}', [ListViewsController::class, 'renderList'])->name('list');

    //LIST CREATE VIEW
    Route::get('/chordhub/listas/crear', [ListViewsController::class, 'renderCreate'])->name('lists_create');
    Route::post('/lists_create_validate', [ListCreateController::class, 'createList'])->name('lists_create_validate');
    //LIST MODIFY VIEW
    Route::get('/chordhub/listas/modificar', [ListViewsController::class, 'renderModify'])->name('lists_modify');
    Route::get('/chordhub/listas/modificar/{id}', [ListViewsController::class, 'renderModifyList'])->name('list_mod');
    Route::post('/list_modify_validate', [ListModifyController::class, 'modifyList'])->name('list_modify_validate');
    //LIST DELETE VIEW
    Route::get('/chordhub/listas/eliminar', [ListViewsController::class, 'renderDelete'])->name('lists_delete');
    Route::delete('/list_delete_validate/{id}', [ListDeleteController::class, 'DeleteList'])->name("list_delete_validate");

    //////////////////// CHORD MODULE VIEWS /////////////////////
    Route::resource('/acordes', ChordController::class);
    Route::get('/chordhub/acordes', [ChordViewsController::class, 'renderChords'])->name('chords');

    Route::get('/acordes/{id}/versiones', [ChordController::class, 'renderVersions'])->name('chord.versions');
    Route::get('/acorde/crear', [ChordController::class, 'createIndex'])->name('chordsCreateIndex');
    Route::get('/acorde/crear/{id}', [ChordController::class, 'createChord'])->name('chordsCreate');
    
    
    Route::get('/acorde/edit', [ChordController::class, 'chordsEditIndex'])->name('chordsEdit');
    Route::get('/acorde/{id}/edit', [ChordController::class, 'chordsEdit'])->name('chordsEditSong');

    Route::get('/acorde/delete', [ChordController::class, 'deleteIndex'])->name('chordsDelete');
    Route::get('/acorde/{id}/delete', [ChordController::class, 'deleteChords'])->name('chordsDeleteIndex');
    
    Route::post('/chordhub_validate_create', [ChordCreateController::class, 'CreateChordSet'])->name('chord_create_validate');
    //CHORD DELETE VIEW
    Route::get('/acorde/eliminar', [ChordController::class, 'destroyIndex'])->name('chords.destroy');

    ///COMMENT MODULES
    Route::resource('/comments', CommentController::class);
    ///script views
    Route::resource('/partituras', ScriptController::class);
    ////////////////////     ADMIN MODULE               ///////////////////////
    //-----------------     USERS      -------------------
    Route::get('/admin/usuarios', [AdminController::class, 'usersIndex'])->name('admin.users');
    Route::get('/admin/usuarios/{id}', [AdminController::class, 'usersEdit'])->name('admin.users.edit');
    Route::put('/admin/usuarios/{id}', [AdminController::class, 'usersUpdate'])->name('admin.users.update');
    Route::delete('/admin/usuarios/{id}', [AdminController::class, 'usersDestroy'])->name('admin.users.destroy');
    //---------------- GENRES -----------------------
    Route::get('/admin/generos', [AdminController::class, 'genreIndex'])->name('admin.genre');

    //---------------- COMMENTS ----------------------
    Route::get('/admin/comentarios', [AdminController::class, 'commentsIndex'])->name('admin.comments');
    Route::get('/comentarios/{id}/{type?}', [CommentController::class, 'getComments'])->name('comments.get');
    ///////TONALITY MODULE

    Route::resource('/tonality', TonalityController::class);


    //// AI CHAT MODULE (BETA)
    Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot.index');
    Route::post('/chatbot/prompt', [ChatbotController::class, 'prompt'])->name('chatbot.prompt');

    ////////////         NOTIFICATION MODULE
    Route::resource('/notificaciones', NotificationController::class);
    Route::post('/leernotificacion/{id}', [NotificationController::class, 'read'])->name('notification.read');
    Route::get('/leernotificacion/{id}', [NotificationController::class, 'readAsGet'])->name('notification.readAsGet');
    Route::get('/leernotificaciones', [NotificationController::class, 'readAll'])->name('notifications.read');

    //SEARCH VIEWS
    Route::get('/buscador/canciones', [SongController::class, 'searchByNameAndGenre'])->name('canciones.search');
    Route::get('/buscador/acordes', [ChordController::class, 'searchByNameAndGenre'])->name('acordes.search');
    Route::get('/buscador/cancioneros', [FileController::class, 'searchByName'])->name('cancioneros.search');
    Route::post('/search_lists', [SearchListController::class, 'SearchLists'])->name('search_lists');
    Route::post('/buscador/cancionero_canciones', [SearchListController::class, 'SearchListSongs'])->name('canciones_cancioneros.search');
    Route::get('/buscador/usuarios', [SearchUsersAdminController::class, 'SearchUsers'])->name('search.users');
 
});