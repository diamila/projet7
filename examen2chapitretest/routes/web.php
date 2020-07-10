<?php

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


/*Route
post: permet d'ajouter une ressource exemple(formulaire=>bd)*
put: permet de modifier une ressource
patch: permet de modifier partciellement une ressource

redirect: redirection

get: permet de recupérer une ressource en passant par l'url
/: c'es la route ou uri(/ page d'accueil)
function: dans la fonction on retourn un vu qui se trouv dans ressourc/view/welcom

*/

/*
Redirection de route

si on met /bonjour sa nous redirige vers 
301:redirection permenante voir https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP

Route::redirect('/accueil', '/', 301);

----------------------------
Passé de parametre à uri '/passage/{nom}'

//1 parametre
Route::get('/passage/{nom?}', function ($nom = null) {
    return 'salut '.$nom;
})->where('nom', '[a-zA-Z]+'); //les condition que caractére 

//2
Route::get('/passage/{id?}/{nom?}', function ($id, $nom = null) {
    return 'id :'.$id.' <br> Nom: '.$nom;
})->where(['id' => '[1-9]+','nom' => '[a-zA-Z]+']); //les condition id que des valeurs el le nom que caractére  e




*/

//Route pour renvoyer le contenu du formulaire apres la saisie,la route ' c'es l'alias routeDiami.save






Route::group(['middleware' => 'auth'], function(){


	Route::get('/home', ['uses' =>'LayoutController@debut','as' =>'debut']);

	/*
	Route::get('/', function () {
	    return view('layouts/layout');
	});
	*/



	//route: route qui lie le controleur et la vu'BlogController appel la vue la page blog (formulaire)'
	Route::get('/premierP', ['uses' =>'PersonneController@index','as' =>'premierP']);



	Route::post('/premierP', ['uses' =>'PersonneController@save','as' => 'routeDiami.save']);


	Route::get('/premierP/create', ['uses' =>'PersonneController@create','as' => 'routeDiami.create']);




	Route::get('/premierP/delete/{id}', ['uses' =>'PersonneController@delete','as' => 'routeDiami.delete']);






	//route: route qui lie le controleur et la vu'BlogController appel la vue la page blog (formulaire)'
	Route::get('/accueilParcelle', ['uses' =>'ParcelleController@index','as' =>'accueilParcelle']);



	Route::post('/accueilParcelle', ['uses' =>'ParcelleController@save','as' => 'routeParcelle.save']);


	Route::get('/accueilParcelle/createParcelle', ['uses' =>'ParcelleController@create','as' => 'routeParcelle.create']);






	Route::get('/accueilParcelle/deleteParcelle/{id}', ['uses' =>'ParcelleController@delete','as' => 'routeParcelle.delete']);





} );

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', ['uses' =>'retourController@retour','as' =>'retour']);
/*
Route::get('/', function() {
  return view('auth/login');
})->name('retour');
*/
