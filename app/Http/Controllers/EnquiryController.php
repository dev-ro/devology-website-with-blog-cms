<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquireFormSend;
class EnquiryController extends Controller
{
    public function enquire( Request $request ) {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]); 


        // Send Mail

        $send = Mail::to('info@gmail.com')->send(new EnquireFormSend($validated['name'], $validated['email'], $validated['message']));


    }
}
