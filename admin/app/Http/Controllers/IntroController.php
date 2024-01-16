<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IntroController extends Controller
{
    function Intro(){
        $Intro = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $intro = Intro::first();
        return view('intro', ['intro'=> $intro , 'messages'=> $messages, 'Intro'=>$Intro]);
    }
    function IntroUPdate(Request $request){
        // Validate the form data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ], [
            'required' => 'The :attribute field is required.',
            'image' => 'The :attribute must be an image.',
            'mimes' => 'The :attribute must be a file of type: jpeg, png, jpg, gif.',
        ], [
            'image' => 'Image',
        ]);
        
        // Get the uploaded file
        $image = $request->file('image');
    
        // Move the uploaded file to a designated directory (you may want to customize this)
        $uploadPath = 'uploads/intro/';
        $fileName = 'intro.' . $image->getClientOriginalExtension();
        
        // Update the logo record in the database
        $intro = Intro::first(); // Assuming you have only one logo record
        
        // Delete the previous image if it exists
        if (File::exists(public_path($intro->image))) {
            File::delete(public_path($intro->image));
        }
        $image->move(public_path($uploadPath), $fileName);
    
        $intro->update(['image' => $uploadPath . $fileName]);
    
        // Optionally, you can return a response or redirect the user
        return redirect()->route('intro')->with('success', 'Logo updated successfully');
    }

    function IntroTextUPdate(Request $request){
         // Validate the request data
         $request->validate([
            'name' => 'required|string',
            'desc' => 'required|string',
            'button' => 'required|string',
            'button_link' => 'nullable|string',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'desc.required' => 'The description field is required.',
            'desc.string' => 'The description must be a string.',
            'button.required' => 'The button field is required.',
            'button.string' => 'The button must be a string.',
            'button_link.string' => 'The button link must be a string.',
        ]);
        

       // Retrieve the first row from the Intro table
    $intro = Intro::first();

    // Check if a row was found
    if ($intro) {
        // Update the existing intro with values from the request
        $intro->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'button' => $request->button,
            'button_link' => $request->button_link,
        ]);

        // Optionally, you can return a response or redirect the user
        return redirect()->route('intro')->with('success_intro', 'Intro updated successfully');
    }

    // If no existing row was found, you may handle this case accordingly
    // For example, you can insert a new row or return an error message
    return redirect()->route('intro')->with('error', 'Intro not found or updated');
    }
}
