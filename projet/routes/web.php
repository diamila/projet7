<?php



Route::get('/', ['uses' =>'LayoutController@debut','as' =>'debut']);

/*
Route::get('/', function () {
    return view('layouts/layout');
});
*/



/*---------CLIENT-----*/

Route::get('/accueilCLient', ['uses' =>'ClientController@index','as' =>'accueilCLient']);



Route::post('/accueilCLient', ['uses' =>'ClientController@save','as' => 'routeClient.save']);


Route::get('/accueilCLient/createClient', ['uses' =>'ClientController@create','as' => 'routeClient.create']);


Route::get('/accueilCLient/deleteClient/{id}', ['uses' =>'ClientController@delete','as' => 'routeClient.delete']);





/*----Commande---*/
Route::get('/accueilCommande', ['uses' =>'CommandeController@index','as' =>'accueilCommande']);



Route::post('/accueilCommande', ['uses' =>'CommandeController@save','as' => 'routeCommande.save']);


Route::get('/accueilCommande/createCommande', ['uses' =>'CommandeController@create','as' => 'routeCommande.create']);



Route::get('/accueilCommande/deleteCommande/{id}', ['uses' =>'CommandeController@delete','as' => 'routeCommande.delete']);






/*------PRODUIT-----*/
Route::get('/accueilProduit', ['uses' =>'ProduitController@index','as' =>'accueilProduit']);



Route::post('/accueilProduit', ['uses' =>'ProduitController@save','as' => 'routeProduit.save']);


Route::get('/accueilParcelle/createProduit', ['uses' =>'ProduitController@create','as' => 'routeProduit.create']);




Route::get('/accueilProduit/deleteProduit/{id}', ['uses' =>'ProduitController@delete','as' => 'routeProduit.delete']);



/*-----concener-----*/

Route::get('/accueilConcerner', ['uses' =>'ConcernerController@index','as' =>'accueilConcerner']);



Route::post('/accueilConcerner', ['uses' =>'ConcernerController@save','as' => 'routeConcerner.save']);


Route::get('/accueilConcerner/createConcerner', ['uses' =>'ConcernerController@create','as' => 'routeConcerner.create']);



Route::get('/accueilConcerner/deleteConcerner/{id}', ['uses' =>'ConcernerController@delete','as' => 'routeConcerner.delete']);
