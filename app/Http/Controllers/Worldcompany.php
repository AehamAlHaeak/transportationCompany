<?php

namespace App\Http\Controllers;

use App\Models\Layer1_employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Events\AddEmoLy1;
use Illuminate\Validation\Validator;
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
    public function AddEmployeL1(Request $request){
      $valedatedEmpl=$request->validate([
        "email"=>"required|email",
        "name"=>"required|max:128|min:3",
        "lastName"=>"required|max:128|min:3",
        "country"=>"required|max:128|min:3",
        "localNumber"=>"required",
        "phoneNumber"=>"required|min:13|max:13",
        "birthDay"=>"required|date"

      ]);
      $employeL1=new Layer1_employe();
    
        $employeL1->email=$request->email;
        $employeL1->name=$request->name;
        $employeL1->last_name=$request->lastName;
        $employeL1->country=$request->country;
        $employeL1->local_number=$request->localNumber;
        $employeL1->phoneNumber=$request->phoneNumber;
        $employeL1->birthDay=$request->birthDay;
        $employeL1->specialization_id=$request->specialization_id;

     
     
        event(new AddEmoLy1($employeL1));
   
      return response()->json(["msg"=>"seccessfull",200]);

    }
}
