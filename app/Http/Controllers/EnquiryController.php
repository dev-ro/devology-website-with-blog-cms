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
            'msg' => 'required',
            'phone' => 'required'
        ]); 

        // Send Mail
        $send = Mail::to('info@gmail.com')->send(new EnquireFormSend($validated['name'], $validated['email'], $validated['msg'], $validated['phone']));

        Enquiry::create([
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'message'   => $validated['msg'],
            'phone'   =>    $request->phone,
            'url'       => url()->previous(),
            'type'      => $request->cat
        ]);

        if($request->wantsJson()) {
            return response()->json([
                'We will be in touch as soon as possible'
            ], 200);
        } 
        return response()->json([
            'message' => 'Something went wrong',
        ], 200);
    }
}
