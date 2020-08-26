<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    //
    // method to handle the feedabck post 
    public function post(Request $request){

        $request->validate([
            'name' => ['required','string'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string']
        ]);

        Feedback::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'feedback' => $request['message']
        ]); 
        
        

        return response(1,200);
    }
}
