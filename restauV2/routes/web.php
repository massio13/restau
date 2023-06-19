<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () { return view('welcome'); });

Route::prefix('/categorie')
        ->name('categorie.')
        ->controller(App\Http\Controllers\CategorieController::class)
        ->group(function() {
            Route::get ('/ajouter','frmCategorie')->name('frm');
            Route::post('/ajouter','addCategorie')->name('add');
            Route::get ('/liste','allCategorie')->name('all');
            Route::get ('/listepaginate','allCategoriePaginate')->name('allpaginate');
            Route::get ('/show/{categorie}','show')->name('show');
            Route::delete ('/delete/{categorie}','delete')->name('delete');
            Route::get ('/update/{categorie}','frmUpdate')->name('frmupdate');
            Route::patch ('/update/{categorie}','update')->name('update');
        });

Route::prefix('/chef')
        ->name('chef.')
        ->controller(App\Http\Controllers\ChefController::class)
        ->group(function() {
            Route::get ('/ajouter','frmChef')->name('frm');             // get  /chef/ajouter      name : chef.frm
            Route::post('/ajouter','addChef')->name('add');             // post /chef/ajouter      name : chef.add
            Route::get ('/liste','lister')->name('liste');      
            Route::delete('/delete/{chef}','delete')->name('delete');
        });

Route::prefix('/plat')
        ->name('plat.')
        ->controller(App\Http\Controllers\PlatController::class)
        ->group(function() {
            Route::get ('/menu','menu')->name('menu');           
            Route::get ('/ajouter','frmPlat')->name('frm');           
            Route::post('/ajouter','addPlat')->name('add');         
            Route::get ('/lister','listerPlat')->name('lister');           
        });



