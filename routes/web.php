<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource("/Agent",'App\Http\Controllers\AgentController');
Route::resource("/Categorie",'App\Http\Controllers\CategorieControllerController');
Route::resource("/Commune",'App\Http\Controllers\CommuneController');
Route::resource("/DiplomeAccademique",'App\Http\Controllers\DiplomeAccademiqueController');
Route::resource("/Dpeps",'App\Http\Controllers\DpepsController');
Route::resource("/Dreps",'App\Http\Controllers\DrepsController');
Route::resource("/Echelle",'App\Http\Controllers\EchelleController');
Route::resource("/Echellon",'App\Http\Controllers\EchellonController');
Route::resource("/Emploi",'App\Http\Controllers\EmploiController');
Route::resource("/Fonction",'App\Http\Controllers\FonctionController');
Route::resource("/LieuDeTravail",'App\Http\Controllers\LieuDeTravailController');
Route::resource("/Localite",'App\Http\Controllers\LocaliteController');
Route::resource("/TypePersonnel",'App\Http\Controllers\TypePersonnelController');
Route::resource("/Users",'App\Http\Controllers\UsersController'