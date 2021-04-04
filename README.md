# Route-ParametersPART1



   
                               How to use Route Parameters with Laravel 8? ( PART 1 )

PART 1 : Required Parameters

step -1: create a Controller

use Illuminate\Http\Request;

php artisan make:controller ParametersController


step -2: put the below code in controller

    public function Test(Request $request, $id) {
       
            return 'This is Required Parameters (PART 1) & id is = ' . $id;
    }


step -3: put the below code in web.php 

Route::get('/Test/{id}', 'App\Http\Controllers\ParametersController@Test');

step -4: make a template ( Route.blade.php) and put the below code in that

@extends('layouts.app')

@section('content')


<a href="/Test/23">
Parameters properly (Part 1)
</a>

@endsection  









PART 2 : You may define as many route parameters as required by your route


step -1: put the below code in template

<a href="{{ route('profile', ['id' => 1, 'photos' => 'yes']) }}">
Parameters properly (Part 2) 
</a> 


step -2: put the below code in web.php

Route::get('/Test/{id}/profile', 'App\Http\Controllers\ParametersController@Test2')->name('profile');

step -3: put the below code in controller

 public function Test2(Request $request, $id) {
       
        return 'This is Required Parameters (PART 2) & id is = ' . $id;
}


i show this part in part1
Parameters & Dependency Injection

Thanks
