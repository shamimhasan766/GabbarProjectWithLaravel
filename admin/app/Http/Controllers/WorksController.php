<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WorksController extends Controller
{
    function Works(){
        $Work = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $work = Work::first();
        return view('works', ['work'=>$work, 'messages'=> $messages, 'Work'=>$Work]);
    }
    function WorksImageUpdate(Request $request){
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
        $uploadPath = 'uploads/works/';
        $fileName = 'work_intro.' . $image->getClientOriginalExtension();
        
        // Update the logo record in the database
        $work = Work::first(); // Assuming you have only one logo record
        
        // Delete the previous image if it exists
        if (File::exists(public_path($work->image))) {
            File::delete(public_path($work->image));
        }
        $image->move(public_path($uploadPath), $fileName);
    
        $work->update(['image' => $uploadPath . $fileName]);
    
        // Optionally, you can return a response or redirect the user
        return redirect()->route('works')->with('success_img', 'Image updated successfully');
    }
    function WorksUpdate(Request $request){
         // Validate the request data
         $validator = $request->validate([
            'intro' => 'required|string',
            'desc' => 'required|string',
            'button' => 'required|string',
            'button_link' => 'nullable|string',
        ], [
            'intro.required' => 'The intro field is required.',
            'intro.string' => 'The intro must be a string.',
            'desc.required' => 'The description field is required.',
            'desc.string' => 'The description must be a string.',
            'button.required' => 'The button field is required.',
            'button.string' => 'The button must be a string.',
            'button_link.string' => 'The button link must be a string.',
        ]);
        

       // Retrieve the first row from the Intro table
    $work = Work::first();

    // Check if a row was found
    if ($work) {
        // Update the existing intro with values from the request
        $work->update([
            'intro' => $request->intro,
            'desc' => $request->desc,
            'button' => $request->button,
            'button_link' => $request->button_link,
        ]);

        // Optionally, you can return a response or redirect the user
        return redirect()->route('works')->with('success_works', 'Works updated successfully');
    }

    // If no existing row was found, you may handle this case accordingly
    // For example, you can insert a new row or return an error message
    return redirect()->route('works')->withErrors($validator, 'error_work');
    }
}
