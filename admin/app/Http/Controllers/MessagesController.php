<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MessagesController extends Controller
{
    function MessageSection(){
        $MessageSection = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        return view('messagesection', ['messages'=> $messages, 'MessageSection'=>$MessageSection]);
    }
    function AllMessages(){
        $AllMessage = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $allMessages = Message::all();
        return view('allmessages', ['allMessages'=> $allMessages, 'messages'=> $messages, 'AllMessage'=>$AllMessage]);
    }

    public function deleteMessage(Request $request, $id)
    {
        $message = Message::find($id);

        if ($message) {
            // Get the upload path and file name
            $filePath = $message->image;

            // Delete the image file
            if (File::exists(public_path($filePath))) {
                File::delete(public_path($filePath));
            }

            // Delete the service
            $message->delete();

            return redirect()->route('allmessages')->with('delete', 'Message deleted successfully');
        } else {
            // Handle the case where the promo with the specified ID was not found
            return redirect()->route('allmessages')->with('error', 'Message not found');
        }
    }

    function ViewMessage(Request $request, $id){
        $viewmessage = Message::find($id);
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        return view('viewmessage', ['messages'=>$messages, 'viewmessage'=>$viewmessage]);
    }
}
