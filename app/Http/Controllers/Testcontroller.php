<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    function Testfun(){
    
    echo" my test controller";
    return view('test');  
        
        
    }
}
