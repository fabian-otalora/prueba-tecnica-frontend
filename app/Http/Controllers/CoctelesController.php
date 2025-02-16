<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoctelesController extends Controller
{
    public function viewListAPI() {
        return view('listAPI');
    }

    public function saveDrink(Request $request){
        
    }
}