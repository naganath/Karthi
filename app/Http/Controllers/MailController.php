<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {
        $body = "Name : " . $request->input('name') . ", Email : " . $request->input('email') . ", Mobile : " . $request->input('mobile') . ", City : " . $request->input('city') . ", Message : " . $request->input('message');
        $response = Mail::raw($body, function($message){
            $message->to("rathnastorespaints@gmail.com")->subject("New visitor to Rathna stores!");
        });
        return response()->json($response, 200);
    }

}
