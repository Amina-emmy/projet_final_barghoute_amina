<?php

namespace App\Http\Controllers;

use App\Mail\MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view("frontend.pages.contact");
    }
    //* send an Email to BackOffice (mail)
    public function MailContact(Request $request)
    {
        Mail::to($request->email)->send(new MailContact($request));

        return back()->with("success", "Email sent successfully ");
    }
}
