<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;

class CoctelesController extends Controller
{
    public function viewListAPI() {
        return view('listAPI');
    }

    public function viewTwoListAPI() {
        return view('listTwoAPI');
    }

    public function viewListDB() {
        return view('listDB');
    }

    public function saveDrink(Request $request){

        $drink = new Drink();
        $drink->name = $request->name;
        $drink->category = $request->category;
        $drink->save();

        if($drink){
            $response = [
                "status" => 200,
                "message" => "Registro guardado correctamente :)"
            ];

            return response()->json($response, 200);
        }else{
            $drink = [
                "status" => 500,
                "message" => "Error :("
            ];
            return response()->json($response, 500);
        }
    }

    public function listDB(){
        $drinks = Drink::all();        
        return $drinks;
    }

    public function delete(Request $request){

        $drink = Drink::where("id","=",$request->id)->first();
        $drink->delete();

        $response = [
            "status" => 200,
            "message" => "Registro eliminado correctamente :)"
        ];

        return response()->json($response, 200);

    }
}