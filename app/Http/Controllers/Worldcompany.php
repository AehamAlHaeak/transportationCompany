<?php

namespace App\Http\Controllers;

use App\Models\Layer1_employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Events\AddEmploye;
use App\Models\Layer2_employe;
use App\Models\Layer3_employe;
use App\Models\Layer4_employe;
use Illuminate\Notifications\Notification;
//use App\Notifications;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Illuminate\Validation\Validator;
use App\Notifications\Welcome_in_our_Company;
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
        "birthDay"=>"required|date",
        "layer"=>["required","max:4"]
      ]);
      
      $employe=new Layer1_employe();
      if($request->layer==2){
        $employe=new Layer2_employe();
      }
      if($request->layer==3){
        $employe=new Layer3_employe();
      }
      if($request->layer==4){
        $employe=new Layer4_employe();
      }
        $employe->email=$request->email;
        $employe->name=$request->name;
        $employe->last_name=$request->lastName;
        $employe->country=$request->country;
        $employe->local_number=$request->localNumber;
        $employe->phoneNumber=$request->phoneNumber;
        $employe->birthDay=$request->birthDay;
        $employe->specialization_id=$request->specialization_id;
        $employe->salary=$request->salary;
        if(!($employe instanceof Layer1_employe)){
          $employe->work_place=$request->work_place;
        }
     
       // event(new AddEmploye($employe));
       $employe->save();
       $employe->notify(new Welcome_in_our_Company($employe));
      return response()->json(["msg"=>"seccessfull",200]);

    }

  


   

   


}
