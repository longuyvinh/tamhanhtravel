<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Requests\ContactForm;

class TravelController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('travels.index');
    }
}