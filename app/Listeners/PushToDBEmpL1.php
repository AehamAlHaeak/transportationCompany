<?php

namespace App\Listeners;

use App\Events\AddEmploye;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use app\Models\Layer1_employe;
class PushToDBEmpL1
{
   
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AddEmploye $event): void
    {
     
      
      $empl= $event->empL;
       $empl->save();
      
       
       
    }
}
