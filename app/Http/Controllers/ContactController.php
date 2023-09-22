<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use App\Models\ContactInfo;
use App\Models\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfos=ContactInfo::all();
        return view("frontend.pages.contact",compact("contactInfos"));
    }
    //* send an Email to BackOffice (mail)
    public function MailContact(Request $request)
    {
        //? send mail
        Mail::to($request->email)->send(new MailContact($request));

        //? Stock it in database
        request()->validate([
            "messageText"=>["required"],
            "name"=>["required"],
            "email"=>["required"],
            "subject"=>["required"]
        ]);
        $data=[
            "messageText"=>$request->messageText,
            "name"=>$request->name,
            "email"=>$request->email,
            "subject"=>$request->subject
        ];
        ContactMail::create($data);
        
        return back()->with("success", "Email sent successfully ");
    }
}
