<?php

namespace App\Notifications;

use App\Models\Layer1_employe;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Welcome_in_our_Company extends Notification
{
    use Queueable;

    private $employe;
    private $workPlace;
    private $specialization;
    private $location;
    public function __construct($employe)
    {
       $this->employe=$employe;
       $this->specialization=$this->employe->specialization->specialization;
       if($this->employe instanceof Layer1_employe){
        $this->workPlace=$this->employe->getWorkPlace();
       
        $this->location="Syria/Damascus/AlAbbase'n Squre";
       }
       else {
        $company=$this->employe->getWorkPlace;
        $this->workPlace= $company->name;
       $this->location=$company->location;
       }
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        
       
        return [
            "subject"=>"welcome in our company !",
            "your work place in"=>$this->workPlace,
            "in location"=>$this->location,
            "start with salary"=>$this->employe->salary,
           "your specialization is"=>$this->specialization

        ];
    }
}
