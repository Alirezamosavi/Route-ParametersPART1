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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/Route', function () {
    return view('Route');
});


Route::get('/Test/{id}', 'App\Http\Controllers\ParametersController@Test');

Route::get('/Test/{id}/profile', 'App\Http\Controllers\ParametersController@Test2')->name('profile');

Route::get('/testUser/{name?}', function ($name = null) {
    return $name;
});

Route::get('/testUser/{name?}', function ($name = 'John') {
    return $name;
});	


Route::get('/firstRoute/{id?}entities', 'App\Http\Controllers\ParametersController@first')
    ->where('id', '([0-9/]+)?')
    ->name('firstRoute');









Route::get('/log', function () {
    return view('login');
});

Route::post('/india', 'App\Http\Controllers\AuthController@login');


Route::get('/test', function () {
    return view('test');
});
// Notice the missing slash  
Route::get('/test/{id?}entities', 'App\Http\Controllers\TestController@first')
    ->where('id', '([0-9/]+)?')
    ->name('first');

Route::get('/test/entities', 'App\Http\Controllers\TestController@second')
    ->name('second');


    Route::get('user/{name?}', function ($name = null) {
        return 'its Null';
    });
    
    Route::get('user/{name?}', function ($name = 'John') {
        return $name;
    }); 
    // register
    Route::get('/Test/{id}', 'App\Http\Controllers\TestController@Test');

    Route::get('/Test/{id}/profile', 'App\Http\Controllers\TestController@Test2')->name('profile');
    // Route::get('user/{id}/profile', function ($id) {
    //     return 'This is Required Parameters (PART 2)';
    // })->name('profile');

    
    

    

   