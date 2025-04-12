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

use Illuminate\Support\Facades\Notification as FacadesNotification;
use Illuminate\Validation\Validator;
use App\Notifications\Welcome_in_our_Company;
use App\Traits\storeData;

class Worldcompany extends Controller
{
  use storeData;
    public function addNewCountryCompany(Request $request){
       
        echo "hellow world";

        echo "i am aeham";
         echo "alhaeak commit this";


        echo "hellow world this is the new world";

        echo "the wolf commit this";



        return response()->json(["msg"=>"hellow "],200);
    }
    public function AddEmployeL1(Request $request){
      //as a note we can to use multi validation proccess and the valedate return an arry include
      //the valedated values with there kyes then we can to use it with the create! and access
      //to valedated values well you see here the vode which we replace it Data and save an many others
      //the trait replace the repatation in code the trait storeDate can with one method store 
      //more than kind of models employees and others but you must to care full
      //the technique which i use to know the model kind most include its whole path see below .Q
      //and you most to use the pathes which you need in trait 
      $valedatedEmpl=$request->validate([
        "email"=>"required|email",
        "name"=>"required|max:128|min:3",
        "last_name"=>"required|max:128|min:3",
        "country"=>"required|max:128|min:3",
        "local_number"=>"required",
        "phoneNumber"=>"required|min:13|max:13",
        "birthDay"=>"required|date",
        "layer"=>["required","max:4"],
        "salary"=>"required",
        "specialization_id"=>"required"
      ]);
      
      // $employe=new Layer1_employe();
      // if($request->layer==2){
      //   $employe=new Layer2_employe();
      // }
      // if($request->layer==3){
      //   $employe=new Layer3_employe();
      // }
      // if($request->layer==4){
      //   $employe=new Layer4_employe();
      // }
      //Data was a parameter to storeInModel but the $valedatedEmpl replace it as the above
        $Data=[  "email"=>$request->email,
         "name"=>$request->name,
         "last_name"=>$request->lastName,
         "country"=>$request->country,
         "local_number"=>$request->localNumber,
         "phoneNumber"=>$request->phoneNumber,
         "birthDay"=>$request->birthDay,
         "specialization_id"=>$request->specialization_id,
        "salary"=>$request->salary,
        
         "work_place"=>$request->work_place];
         // .Q the technique!!
        $modelName="App\Models\Layer".$request->layer."_employe";
         $employe=$this->storeInModel($modelName,$valedatedEmpl);
     
       // event(new AddEmploye($employe));
      
       $employe->notify(new Welcome_in_our_Company($employe));
       //cahnge state to readed 
       $employe->notifications()->update(["read_at"=>now()]);
       //to return the notification

      return response()->json( ["notification"=>$employe->notifications()->latest()->get()]);

    }

  

public function addTryFirst(){
  return "add try first";
}
   

    public function addTrySecond(){
      return "add try second new term";
    }


}
