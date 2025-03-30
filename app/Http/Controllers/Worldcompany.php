<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Worldcompany extends Controller
{
    //
    public function addNewCountryCompany(Request $request){

        echo "hellow world";

        echo "i am aeham";
         echo "alhaeak commit this";


        echo "hellow world this is the new world";

        echo "the wolf commit this";



        return response()->json(["msg"=>"hellow "],200);
    }
}
