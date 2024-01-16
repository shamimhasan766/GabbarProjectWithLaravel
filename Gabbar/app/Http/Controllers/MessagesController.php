<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    function SendMessage(Request $request){
            
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email', // Use the 'email' validation rule for email fields
            'message' => 'required|string',
        ]);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email', // Use the 'email' validation rule for email fields
            'message' => 'required|string',
        ], [
            'required' => 'The :attribute field is required.',
            'name.required' => 'The Name field is required.',
            'name.string' => 'The Name must be a string.',
            'email.required' => 'The Email field is required.',
            'email.email' => 'The Email must be an Email Format.',
            'message.required' => 'The Message field is required..',
            'message.string' => 'The Message must be a string.',
        ]);

        // Create a new instance of YourModel
        $newMessage = new Message;

        // Assign values from the request to the model properties
        $newMessage->name = $request->name;
        $newMessage->email = $request->email;
        $newMessage->message = $request->message;

        // Save the new menu to the database
        $newMessage->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('index')->with('success', 'Message Sent successfully');
    }
}
