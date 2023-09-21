<?php

namespace App\Http\Controllers;

use App\Mail\MailNewsLetter;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $randomProducts = Product::inRandomOrder()->take(3)->get();
        $last4Products = Product::latest()->take(4)->get();

        return view('home', compact("products", "randomProducts", "last4Products"));
    }

    //* send a NewsLetter (mail)
    public function mailNewsLetter(Request $request)
    {
        Mail::to($request->emailuser)->send(new MailNewsLetter($request));

        return back()->with("success", "Email sent successfully ");
    }
}
