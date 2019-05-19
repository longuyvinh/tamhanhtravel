<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Requests\ContactForm;

class HomeController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        // email_firstname
        // email_lastname
        // email_phone
        $firstname = $request->input('email_firstname') ? $request->input('email_firstname') : "N/A";
        $lastname = $request->input('email_lastname') ? $request->input('email_lastname') : "N/A";
        $phone = $request->input('email_phone') ? $request->input('email_phone') : "N/A";
        $email = $request->input('email_address');
        $content = $request->input('email_message');

        Mail::send('emails.send', ['email' => $email, 'content' => $content, 'firstname'=> $firstname, 'lastname'=>$lastname, 'phone'=>$phone], function ($message)
        {
            $message->from('support@tamhanh.com', 'Tamhanh Travel');

            $message->to('tamhanhtravel.2017.@gmail.com');
            //Add a subject
            $message->subject("Have contact from Tamhanh Travel Website");

        });

        return redirect()->back()->with('message', 'Thanks for contacting us!');
    }

    public function store(ContactForm $request)
    {
        return redirect()->back()->with('message', 'Thanks for contacting us!');
    }
}
