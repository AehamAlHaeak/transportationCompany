<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Worldcompany extends Controller
{
    //
    public function addNewCountryCompany(Request $request){
        echo "hellow world this is the new world";
        return response()->json(["msg"=>"hellow "],200);
    }
}
