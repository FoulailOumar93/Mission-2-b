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
        /*-------------------- Use case connexion---------------------------*/
Route::get('/',[
        'as' => 'chemin_connexion',
        'uses' => 'connexionController@connecter'
]);
Route::post('/',[
        'as'=>'chemin_valider',
        'uses'=>'connexionController@valider'
]);
Route::get('deconnexion',[
        'as'=>'chemin_deconnexion',
        'uses'=>'connexionController@deconnecter'
]);
Route::get('/export-pdf', [
        'as'=>'chemin_exportpdf',
        'uses'=> 'PdfExportController@export'

]);
Route::post('ModifierMDP',[
        'as'=>'chemin_modifierMDP',
        'uses'=>'connexionController@ModifierMDP'
]);
         /*-------------------- Use case état des frais---------------------------*/
Route::get('selectionMois',[
        'as'=>'chemin_selectionMois',
        'uses'=>'etatFraisController@selectionnerMois'
]);

Route::post('listeFrais',[
        'as'=>'chemin_listeFrais',
        'uses'=>'etatFraisController@voirFrais'
]);

        /*-------------------- Use case gérer les frais---------------------------*/

Route::get('gererFrais',[
        'as'=>'chemin_gestionFrais',
        'uses'=>'gererFraisController@saisirFrais'
]);


Route::post('sauvegarderFrais',[
        'as'=>'chemin_sauvegardeFrais',
        'uses'=>'gererFraisController@sauvegarderFrais'
]);
Route::get('validerFrais',[
        'as'=>'chemin_validerFrais',
        'uses'=>'gestionFraisController@validerFrais'
]);


Route::get('afficheFrais',[
        'as'=>'chemin_afficheFrais',
        'uses'=>'gestionFraisController@afficheFrais'
]);
Route::get('actualiseFrais',[
        'as'=>'chemin_actualiseFrais',
        'uses'=>'gestionFraisController@actualiseFrais'
]);

Route::post('UpdateFrais',[
        'as'=>'chemin_updateFrais',
        'uses'=>'gestionFraisController@updateFrais'
]);

Route::get('ModifierMDP',[
        'as'=>'chemin_modifierMDP',
        'uses'=>'connexionController@ModifierMotDePasse'
]);

//Route::post('ModifierMDP',[
        //'as'=>'chemin_modifierMDP',
        //'uses'=>'MotdepasseoublieController@ModifierMotDePasse'
//]);

