<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    function Services(){
        $Service = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $services = Service::all();
        return view('service', ['services'=> $services , 'messages'=> $messages, 'Service'=>$Service]);
    }
    function AddService(Request $request){
            
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ], [
            'required' => 'The :attribute field is required.',
            'image' => 'The :attribute must be an image.',
            'mimes' => 'The :attribute must be a file of type: jpeg, png, jpg, gif.',
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'desc.required' => 'The description field is required.',
            'desc.string' => 'The description must be a string.',
        ]);

        $image = $request->file('image');
    
        // Move the uploaded file to a designated directory (you may want to customize this)
        $uploadPath = 'uploads/services/';
        $fileName = 'service'. uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move(public_path($uploadPath), $fileName);
        // Create a new instance of YourModel
        $newService = new Service;

        // Assign values from the request to the model properties
        $newService->title = $request->title;
        $newService->desc = $request->desc;
        $newService->image = $uploadPath.$fileName;

        // Save the new menu to the database
        $newService->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('service')->with('success', 'Service added successfully');
    }

    public function deleteService(Request $request, $id)
    {
        $service = Service::find($id);

        if ($service) {
            // Get the upload path and file name
            $filePath = $service->image;

            // Delete the image file
            if (File::exists(public_path($filePath))) {
                File::delete(public_path($filePath));
            }

            // Delete the service
            $service->delete();

            return redirect()->route('service')->with('delete', 'Service deleted successfully');
        } else {
            // Handle the case where the promo with the specified ID was not found
            return redirect()->route('service')->with('error', 'Service not found');
        }
    }

    function EditService(Request $request){
        $id = $request->id;
    
        $request->validate([
            'values.0' => 'required|string',
            'values.1' => 'required|string',
        ]);
    
        // Retrieve the menu item by ID
        $service = Service::find($id);
    
        // Check if the menu item exists
        if ($service) {
            // Update the menu item with the new values
            $service->update([
                'title' => $request->values[0],
                'desc' => $request->values[1],
            ]);
    
            // Optionally, you can return a response or redirect the user
            return response()->json(['success' => true, 'message' => 'Service updated successfully']);
        } else {
            // Handle the case where the menu item with the specified ID was not found
            return response()->json(['success' => false, 'message' => 'Service not found'], 404);
        }
    }
}
