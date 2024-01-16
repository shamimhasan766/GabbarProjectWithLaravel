<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PromoController extends Controller
{
    function Promo(){
        $Promo = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $promos = Promo::all();
        return view('hero', ['promos'=>$promos, 'messages'=> $messages, 'Promo'=>$Promo]);
    }
    function AddPromo(Request $request){
         // Validate the request data
         $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title' => 'required|string',
            'desc' => 'required|string',
        ], [
            'required' => 'The :attribute field is required.',
            'image' => 'The :attribute must be an image.',
            'mimes' => 'The :attribute must be a file of type: jpeg, png, jpg, gif.',
            'title.required' => 'The Title field is required.',
            'title.string' => 'The Title must be a string.',
            'desc.required' => 'The description field is required.',
            'desc.string' => 'The description must be a string.',
        ], [
            'image' => 'Image',
        ]);

        // Get the uploaded file
        $image = $request->file('image');

        // Move the uploaded file to a designated directory (you may want to customize this)
        $uploadPath = 'uploads/promo/';
        $fileName = 'promo'. uniqid().'.'. $image->getClientOriginalExtension();

        $image->move(public_path($uploadPath), $fileName);
        // Create a new instance of YourModel
        $newPromo = new Promo;

        // Assign values from the request to the model properties
        $newPromo->title = $request->title;
        $newPromo->desc = $request->desc;
        $newPromo->image = $uploadPath.$fileName;

        // Save the new menu to the database
        $newPromo->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('promo')->with('success', 'Promo added successfully');
    }
    public function deletePromo(Request $request, $id)
    {
        $promo = Promo::find($id);

        if ($promo) {
            // Get the upload path and file name
            $filePath = $promo->image;

            // Delete the image file
            if (File::exists(public_path($filePath))) {
                File::delete(public_path($filePath));
            }

            // Delete the promo
            $promo->delete();

            return redirect()->route('promo')->with('delete', 'Promo deleted successfully');
        } else {
            // Handle the case where the promo with the specified ID was not found
            return redirect()->route('promo')->with('error', 'Promo not found');
        }
    }
    function EditPromo(Request $request){
        $id = $request->id;
    
        $request->validate([
            'values.0' => 'required|string',
            'values.1' => 'required|string',
        ]);
    
        // Retrieve the menu item by ID
        $promo = Promo::find($id);
    
        // Check if the menu item exists
        if ($promo) {
            // Update the menu item with the new values
            $promo->update([
                'title' => $request->values[0],
                'desc' => $request->values[1],
            ]);
    
            // Optionally, you can return a response or redirect the user
            return response()->json(['success' => true, 'message' => 'Promo updated successfully']);
        } else {
            // Handle the case where the menu item with the specified ID was not found
            return response()->json(['success' => false, 'message' => 'Promo not found'], 404);
        }
    }
    
}
