<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
     public function sendEmail()
    {
      $email = [
        'title' => 'Ehllo',
        'body' => 'World'
      ];
 
      Mail::to('elitecyberdevelopersph@gmail.com')->send(new NotifyMail($email));
           return 'Great! Successfully send in your mail';
    } 
}
