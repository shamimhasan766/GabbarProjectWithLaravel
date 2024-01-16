<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    function Logo(){
        $Logo = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $logo = Logo::first();
        return view('logo' , ['path'=>$logo->path , 'messages'=> $messages, 'Logo'=>$Logo]);
    }
    public function LogoUpdate(Request $request)
    {
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
        $uploadPath = 'uploads/logo/';
        $fileName = 'logo.' . $image->getClientOriginalExtension();
        
        // Update the logo record in the database
        $logo = Logo::first(); // Assuming you have only one logo record
        
        // Delete the previous image if it exists
        if (File::exists(public_path($logo->path))) {
            File::delete(public_path($logo->path));
        }
        $image->move(public_path($uploadPath), $fileName);
    
        $logo->update(['path' => $uploadPath . $fileName]);
    
        // Optionally, you can return a response or redirect the user
        return redirect()->route('logo')->with('success', 'Logo updated successfully');
    }
}
