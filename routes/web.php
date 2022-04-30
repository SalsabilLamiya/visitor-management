<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'auth'], function () {
Route::get('/index',[
    'uses'=> 'VisitorController@index',
    'as'=>'visitors.index'
]);
///////////////////////////////////////////////
Route::get('/showVisitor',[
    'uses'=> 'VisitorController@index',
    'as'=>'visitors.index'
]);
/////////////////////////////////////////////
Route::get('/addVisitor', function () {
    return view('addVisitor');
});
///////////////////////////////////////////////

Route::post('/create' , [
    'uses'=> 'VisitorController@create',
    'as'=>'visitors.create'
]);

Route::get('/visitors/{visitor}/edit',[
    'uses'=> 'VisitorController@edit',
    'as'=>'visitors.edit'
]);

Route::post('/visitors/{visitor}/update' , [
    'uses'=> 'VisitorController@update',
    'as'=>'visitors.update'
]);

Route::delete('/visitors/{visitor}' , [
    'uses'=> 'VisitorController@destroy',
    'as'=>'visitors.delete'
]);

Route::get('/visitHistory/{id}','VisitHistoryController@createHistory')->name('visitor.history');


Route::get('/showVistorHistory','VisitHistoryController@historyView')->name('visitor.showHistory');

Route::get('/showTopVistor','VisitorController@topVisitor')->name('visitor.topVisitor');


Route::get('/search', 'VisitorController@search')->name('search');

Route::get('/showVistorHistory/{id}','VisitHistoryController@leavingHistory')->name('visitor.leavingHistory');

//////////////////////////////////////

/* Route::get('/gateman',[
    'uses'=> 'GatemanController@gateman',
    'as'=>'gatemans.gateman'
]); */
///////////////////////////////////////////////
Route::get('/showGateman',[
    'uses'=> 'GatemanController@gateman',
    'as'=>'gatemans.gateman'
]);
/////////////////////////////////////////////
Route::get('/gateman', function () {
    return view('gateman');
});
///////////////////////////////////////////////
Route::post('/creategateman' , [
    'uses'=> 'GatemanController@create',
    'as'=>'gatemans.create'
]);

Route::get('/gatemans/{gateman}/EditGateman',[
    'uses'=> 'GatemanController@EditGateman',
    'as'=>'gatemans.EditGateman'
]);

Route::post('/gatemans/{gateman}/update' , [
    'uses'=> 'GatemanController@update',
    'as'=>'gatemans.update'
]);

Route::delete('/gatemans/{gateman}' , [
    'uses'=> 'GatemanController@destroy',
    'as'=>'gatemans.delete'
]);




Route::get('/home', 'HomeController@index')->name('home');
});


/////////////////////////////////////////




