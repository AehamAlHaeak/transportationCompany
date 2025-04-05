<?php

namespace App\Listeners;

use App\Events\AddEmoLy1;
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
    public function handle(AddEmoLy1 $event): void
    {
     
      
      $empl= $event->empL1;
       $empl->save();
      
       
       
    }
}
