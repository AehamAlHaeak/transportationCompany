<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IDUController;
use App\Mail\SayHellow;


    use Mailgun\Mailgun;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
Mail::to("www.haeak@gmail.com")->send(new SayHellow());
return response()->json(["msg"=>"sent"],200);
*/

Route::get("/sendEmail",function (){
    $mg = Mailgun::create('cdb0e84d61f07a76afc799352264fbca-24bda9c7-b16cea10'); // استبدل بمفتاحك

$result = $mg->messages()->send('sandbox7df7dde2bdab44959da6f33c20f5c704.mailgun.org', [
    'from'    => 'Wolf Company <postmaster@sandbox7df7dde2bdab44959da6f33c20f5c704.mailgun.org>',
    'to'      => 'www.haeak@gmail.com', // تأكد من تفعيله في Authorized Recipients
    'subject' => 'Say Hello',
    'text'    => 'This is a test email from Mailgun Sandbox.'
]);

echo "تم الإرسال! ID: " . $result->getId();
    
});



