<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquireFormSend;
use App\Models\Enquiry;
class EnquiryController extends Controller
{
    public function enquire( Request $request ) {


        // Refactor ASAP 
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]); 

        // Send Mail
        $send = Mail::to('info@gmail.com')->send(new EnquireFormSend($validated['name'], $validated['email'], $validated['message']));

        Enquiry::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'message'   => $validated['message'],
            'url'       => url()->previous(),
            'type'      => url()->previous()
        ]);

        if($request->wantsJson()) {
            return response()->json([
                'message' => 'Something went wrong',
            ], 200);
        } else {
            return back()->with('success' , 'We will be in touch as soon as possible');
        }

    }
}
