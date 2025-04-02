<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IDUController;
use App\Mail\SayHellow;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/
/*
Route::get("/sendEmail",function (){
Mail::to("www.haeak@gmail.com")->send(new SayHellow());
return response()->json(["msg"=>"sent"],200);
}); 
the domain is not work so i will not delete the code because in future i will costumi

*/

