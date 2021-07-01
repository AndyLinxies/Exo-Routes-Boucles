<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremController;
use App\Http\Controllers\DeuxController;
use App\Http\Controllers\TroisController;

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

// exercice
// -reprend l'exercice_route_exo_5
// -modifier les routes pour utiliser des controller qui return les view avec leurs data qui sont demandées dans l'exercice
// -rajouter des name() a chaque route (adapter la nav en conséquence)
// Dans un nouveau projet : laravel_controller_exo_2
// -créer une route qui via un controller retourne une view users
// -créer un objet avec des utilisateurs qu'on renvoi et affiche les données dans la view users
// -les données à envoyer sont : ID, nom, age, emal


Route::get('/', [TroisController::class,'index']);

Route::get('/contact/sav', [TroisController::class,'servApVente'])->name('sav');

Route::get('/contact/partenariat', [TroisController::class,'partena'])->name('partenariat');

Route::get('/contact/info', [TroisController::class,'partenariaz'])->name('info');

Route::get('/team/front',[PremController::class,'front'] )->name('frontend');

Route::get('/team/backend',[DeuxController::class,'back'] )->name('backend');


//Methode Alexis
//ex de route précedente avant controller


//Route::get('/team/backend', function () {
//    return view('team.web.dev.backend');
//})->name('backend');

//ex de comment on accederai au tableau via une boucle : 
//foreach($nomTableau as $element){
//<p>{{$element['nom']}}</p>
//}


// view()->composer(['*'],function ($view) {
//     $back=[
//         'personne1'=>[
//             'nom'=>'Handy', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne2'=>[
//             'nom'=>'Hendeck', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne3'=>[
//             'nom'=>'Harouf', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne4'=>[
//             'nom'=>'Hancock', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ]

//     ];
    
//     $front=[
//         'personne1'=>[
//             'nom'=>'Handy front', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne2'=>[
//             'nom'=>'Hendeck front', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne3'=>[
//             'nom'=>'Harouf front', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne4'=>[
//             'nom'=>'Hancock front', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ],
//         'personne5'=>[
//             'nom'=>'Hmihay front', 
//             'fonction'=>'Backend dev', 
//             'image'=> asset('img/salade.jpg')
//         ]

//     ];
//     $view->with('back',$back);
//     $view->with('front',$front);
// });

