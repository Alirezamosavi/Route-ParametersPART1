# Route-ParametersPART1
LINK VIDEO:

https://youtu.be/5ASt6NzpqFs


   
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



How to use Route Parameters with Laravel 8? ( PART 2 )
									             this part= Optional parameters
												 
step -1: put the below code in web.php

Route::get('/testUser/{name?}', function ($name = null) {
    return $name;
});


step -2: put the below code in web.php

Route::get('/testUser/{name?}', function ($name = 'John') {
    return $name;
});	

as you can see in step -1 after put that code our browser was null
but when i put a name we could see that name




step -3: i want show more example for that

put the below code in template

<a href="{{ route('firstRoute', ['id' => '123/']) }}">
    First route
</a>


now put the below code in web.php

Route::get('/firstRoute/{id?}entities', 'App\Http\Controllers\ParametersController@first')
    ->where('id', '([0-9/]+)?')
    ->name('firstRoute');
	
	
	
put the below code in controller

public function first($id = null)
    {
        // If $id is not null, it will have a trailing slash
        $id = rtrim($id, '/');
        
		return 'First route with: ' . $id;
        
    }	
	
	
	
now i want more example for that to more undrestand of Optional parameters

first put the below code in template
<a href="{{ route('firstRoute') }}">
    Second route
</a>


as you can see for this code we can see this code is almost same to another code in this tutorial
but they have a diffrent and this diffrent is id . 
because the id in this example is null but we use frome same Route for that and same controller 
now put the below code in controller and little change that same controller 
Optional Parameters say use about same Route
thats it

now put the below code in controller and little change that same controller 

if(!$id){
        
        return 'Second route';
        }else{
		

Thanks
