<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Test;

class listTestController extends Controller
{
    public function getTest(Request $request){

    	$getTest = DB::table('tests')
    				->where('tests.id', $request-> id)
    				->get();

    	return response()->json(['message' => $getTest], 200);
    }
}
