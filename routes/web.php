<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TypeaheadController;
use App\Http\Controllers\ParametresController;
use App\Http\Controllers\CovoiturageController;

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



Route::get('/', [HomeController::class,"getUserDetails"])->name("/");
Route::get('/Trajet/{id}', [TrajetController::class,"getTrajetDetails"])->name("/Trajet");
Route::get('/index', [HomeController::class,"getUserDetails"])->name("index");
Route::get('/ProposerTrajet',[CovoiturageController::class,"proposerTrajet"])->name("ProposerTrajet");
Route::get('/RechercherTrajetPD/{dest}',[CovoiturageController::class,"rechercherTrajetPD"])->name("RechercherTrajetPD");
Route::get('/RechercherTrajet',[CovoiturageController::class,"rechercherTrajet"])->name("RechercherTrajet");
Route::get('/RechercherTrajetNext/{next}',[CovoiturageController::class,"rechercherTrajetNext"])->name("RechercherTrajetNext");
Route::get('/RechercherTrajetN',[CovoiturageController::class,"rechercherTrajetN"])->name("RechercherTrajetN");
Route::get('/RechercherTrajetD1/{dep}/{arrive}/{y}/{m}/{d}',[CovoiturageController::class,"rechercherTrajetD1"])->name("/RechercherTrajetD1");
Route::get('/AjouterCovoiturage',[CovoiturageController::class,"ajouterCovoiturage"])->name("ajouterCovoiturage");
Route::post('/EnregistrerTrajet',[CovoiturageController::class,"enregistrerTrajet"])->name("EnregistrerTrajet");
Route::post('/AjouterCovoiturageAdditionel', [CovoiturageController::class,"ajouterCovoiturageAdditionel"])->name("AjouterCovoiturageAdditionel");
Route::get('/Ajax-autocomplete-search', [TypeaheadController::class, 'autocompleteSearch'])->name('autocompleteSearch');
Route::get('/ReqCovoiturage', [TrajetController::class,"reqCovoiturageUser"])->name('ReqCovoiturage');
Route::get('/MesTrajets', [CovoiturageController::class,"mesTrajets"])->name('MesTrajets');
Route::get('/Parametres', [ParametresController::class,"parametres"])->name('Parametres');
Route::get('/Profil', [ParametresController::class,"profil"])->name('Profil');
Route::post('/UpdateProfile', [ParametresController::class,"update"])->name('UpdateProfile');
Route::get('/ViewProfile/id={id}', [ParametresController::class,"viewprofile"])->name('ViewProfile');
Route::post('/Questions', [QuestionController::class,"question"])->name('Questions');
Route::post('/Review', [ReviewController::class,"review"])->name('Review');
Route::get('/adminpage', [AdminController::class,"loginView"])->name('adminpage');
Route::post('/adminlogin', [AdminController::class,"login"])->name('adminlogin');
Route::get('/indexadmin', [AdminController::class,"index"])->name('indexadmin');
Route::get('/adminlogout', [AdminController::class,"logout"])->name('adminlogout');
Route::get('/users', [AdminController::class,"users"])->name('users');
Route::get('/modifyUser/id={id}', [AdminController::class,"modifyUser"])->name('modifyUser');
Route::get('/deleteCov/id={id}', [AdminController::class,"deleteCov"])->name('deleteCov');
Route::get('/deleteRev/id={id}', [AdminController::class,"deleteRev"])->name('deleteRev');
Route::get('/deleteCom/id={id}', [AdminController::class,"deleteCom"])->name('deleteCom');
Route::get('/deleteUser/id={id}', [AdminController::class,"deleteUser"])->name('deleteUser');
Route::post('/modifyUser', [AdminController::class,"saveUser"])->name('modifyUser');
Route::get('/covs', [AdminController::class,"covs"])->name('covs');
Route::post('/sendMessage', [MessageController::class,"saveMessage"])->name('sendMessage');
Route::get('/revs', [AdminController::class,"revs"])->name('revs');
Route::get('/messages', [AdminController::class,"messages"])->name('messages');
Route::get('/coms', [AdminController::class,"coms"])->name('coms');
Route::get('/coms', [AdminController::class,"coms"])->name('coms');
Route::get('/reglage', [AdminController::class,"reglage"])->name('reglage');
Route::post('/createAdmin', [AdminController::class,"createAdmin"])->name('createAdmin');
Route::get('/descision/id={id}/status={status}/covid={covid}', [TrajetController::class,"descision"])->name('descision');
Route::get('/deleteAdmin/id={id}', [AdminController::class,"deleteAdmin"])->name('deleteAdmin');
Route::get('/deleteMessage/id={id}', [AdminController::class,"deleteMessage"])->name('deleteMessage');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
