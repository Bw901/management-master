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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clients', 'ClientsController');
Route::resource('payments', 'PaymentsController');
Route::resource('collections', 'CollectionsController');
Route::resource('complaints', 'ComplaintController');
Route::resource('requests', 'RequestController');