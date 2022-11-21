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
/*
Route::get('/', function () {
    return view('');
});
*/
Route::get("/connexion",function()
{
    return view("authentification");
});
Route::get("/",'App\Http\Controllers\MainController@welcome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   
       echo  $type=Auth::user()->type;
       if($type==2)
             return redirect("/homeMin");
         
         else if($type==1)
             return redirect("/homeAdmin");
         
         else if($type==4)
             return redirect("/homeDpeps");
         
         else if($type==3)
             return redirect("/homeDreps");

         else if($type==0)
             return redirect("/homeEts");
            
   

 })->name('dashboard');



Route::get("/homeAdmin",'App\Http\Controllers\MainController@HomeAdmin');
Route::get("/homeMin",'App\Http\Controllers\MainController@HomeMin');
Route::get("/homeDpeps",'App\Http\Controllers\MainController@HomeDPEPS');
Route::get("/homeDreps",'App\Http\Controllers\MainController@HomeDREPS');
Route::get("/homeEts",'App\Http\Controllers\MainController@HomeEts');
Route::get("/Admin-Dpeps",'App\Http\Controllers\DpepsController@AdminDpeps');
Route::get("/Admin-Dreps",'App\Http\Controllers\DrepsController@AdminDreps');

Route::get("/MinDreps",'App\Http\Controllers\DrepsController@MinDreps');
Route::get("/MinDpeps",'App\Http\Controllers\DpepsController@MinDpeps');
Route::get("/MinEts",'App\Http\Controllers\DrepsController@MinEts');
Route::get("/DPEPS-Ets/{id}",'App\Http\Controllers\EtsController@Dpeps_ets');

Route::get("/Dreps-Dpeps/{id}","App\Http\Controllers\DpepsController@DpepsForDreps");
Route::get("/EtsForDpeps","App\Http\Controllers\EtsController@EtsForDpeps");
Route::get("/Agent-Dreps/{idDreps}","App\Http\Controllers\AgentController@AgentsDreps");
Route::get("/Admin-Ets","App\Http\Controllers\EtsController@AdminEts");
Route::get("Agent-Dpeps/{idDreps}","App\Http\Controllers\AgentController@AgentsDpeps");
Route::get("Agent-Ets/{idDreps}","App\Http\Controllers\AgentController@AgentsEts");

/////////////////////////////////////////////////////////////
Route::get("/DrepsDpeps","App\Http\Controllers\DpepsController@DrepsDpeps");
Route::get("DrepsAgents","App\Http\Controllers\DpepsController@DrepsAgents");
////////////////////////////////////////////////////////////////////////

Route::resource("/Agent",'App\Http\Controllers\AgentController');

Route::post("ImportAgent",'App\Http\Controllers\AgentController@importerListeAgent');
Route::get("ExportAgent",'App\Http\Controllers\AgentController@exportData');

Route::resource("/Ets",'App\Http\Controllers\EtsController');
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
Route::resource("/Users",'App\Http\Controllers\UsersController');
Route::resource("/Actualite",'App\Http\Controllers\ActualiteController');
Route::resource("/Gallery",'App\Http\Controllers\GalleryController');
Route::get("showActualite/{id}","App\Http\Controllers\ActualiteController@showActualite");
Route::get("allActualites","App\Http\Controllers\ActualiteController@indexForWelcome");
Route::resource("/Annonce",'App\Http\Controllers\AnnonceController');
