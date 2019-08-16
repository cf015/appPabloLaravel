<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function createTest(Request $request){

    	$test = new Test();
    	$test->titulo = $request->titulo;
    	$test->coordenadas = $request->coordenadas;
    	$test->audioPrueba = $request->audioPrueba;
    	$test->date = $request->date;
    	$test->contact = $request->contact;
    	$test->urlImage = $request->urlImage;
    	$test->save();

    	return response()->json(['message' => 'datos creados correctamente'], 200);
    }

    public function getTest(){

    	$test = Test:: all();
    	
    	return response()-> json(['message' => $test], 200);
    }

    public function updateTest(Request $request){

    	$test = Test:: findOrFail($request -> id);
       	$test->update($request->all());

        return response()->json(['message' => 'test actualizado correctamente'], 201);
    }

    public function deleteTest(Request $request){
        $test = Test:: findOrFail($request -> id);
        $test -> delete();
        return response()->json(['message' => 'test eliminado correctamente']);
    }

}
