<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParametersController extends Controller
{
    
    public function Test(Request $request, $id) {
       
        return 'This is Required Parameters (PART 1) & id is = ' . $id;
}



public function Test2(Request $request, $id) {
       
    return 'This is Required Parameters (PART 2) & id is = ' . $id;
}


public function first($id = null)
    {
        // If $id is not null, it will have a trailing slash
        $id = rtrim($id, '/');
//if id is null show this function        
if(!$id){
        
    return 'ID or NAME is null';
    }
    //if id isnt null show that id with this return
    else{
        
		return 'First route with: ' . $id;
    }
        
    }	

}
