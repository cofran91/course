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


Route::get('/', 'PortfolioController@index')->name('home');

Route::get('/about','PortfolioController@aboutindex')->name('about.index');

Route::get('/portfolio', 'PortfolioController@portfolioindex')->name('portfolio.index');
Route::get('/project/{project_url}', 'PortfolioController@projectshow')->name('project.show');

Route::group(['middleware'=>'auth'], function(){
Route::get('/create', 'PortfolioController@createindex')->name('create.index');
Route::post('/create', 'PortfolioController@createstore')->name('create.store');
Route::get('/edit/{project_url}', 'PortfolioController@editindex')->name('edit.index');
Route::put('/edit/{project_url}', 'PortfolioController@editstore')->name('edit.store');
Route::delete('/eliminar/{project_url}', 'PortfolioController@delete')->name('delete');

}); 

Route::get('/contact', 'PortfolioController@contactindex')->name('contact.index');
Route::post('/contact', 'MessagesController@contactstore')->name('contact.store');


Auth::routes();




