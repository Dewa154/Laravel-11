<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
     //
    function sendEmail(Request $request){

        //Static Data
        // $to = "anujkurre12@gmail.com";
        // $msg = "dummy mail by Dewa kurrey 5555";
        // $subject = "Dewa code by code";

        //Dynamic Data
        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;

        //Sending Email
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return "Email sent successfully!";
    }
}
