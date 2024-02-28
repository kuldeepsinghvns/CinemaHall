<?php

use App\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/booking',function( Request $request){

	try{
		$hallid=$request["hallid"];
		// $bk=[];
		// $bk["name"]=$name;
		$bk=booking::where('hallid',$hallid)->get();
		if($bk==null){
			throw new Exception("name not found");
		}
		$bk["status"]="ok";
		return response()->json($bk,200);
	}
	catch (\Exception $ex){
		$error=array("status"=>"failed","error"=>$ex->getmessage());
		return response()->json($error,200);
	}
});