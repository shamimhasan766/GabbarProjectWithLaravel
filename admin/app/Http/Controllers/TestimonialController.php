<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    function Testimonail(){
        $Testimonial = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $testimonials = Testimonial::all();
        return view('testimonial', ['testimonials'=>$testimonials, 'messages'=> $messages, 'Testimonial'=>$Testimonial]);
    }
    function AddTestimonail(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'comment' => 'required|string',
        ], [
            'required' => 'The :attribute field is required.',
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'comment.required' => 'The comment field is required.',
            'comment.string' => 'The comment must be a string.',
        ]);

        // Create a new instance of YourModel
        $newTestimonial = new Testimonial;

        // Assign values from the request to the model properties
        $newTestimonial->name = $request->name;
        $newTestimonial->title = $request->title;
        $newTestimonial->comment = $request->comment;

        // Save the new menu to the database
        $newTestimonial->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('testimonial')->with('success', 'Testimonial added successfully');
    }

    public function deleteTestimonial(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        if ($testimonial) {
            // Get the upload path and file name
            $filePath = $testimonial->image;

            // Delete the image file
            if (File::exists(public_path($filePath))) {
                File::delete(public_path($filePath));
            }

            // Delete the service
            $testimonial->delete();

            return redirect()->route('testimonial')->with('delete', 'Testimonial deleted successfully');
        } else {
            // Handle the case where the promo with the specified ID was not found
            return redirect()->route('testimonial')->with('error', 'Testimonial not found');
        }
    }

    function EditTestimonial(Request $request){
        $id = $request->id;
    
        $request->validate([
            'values.0' => 'required|string',
            'values.1' => 'required|string',
            'values.2' => 'required|string',
        ]);
    
        // Retrieve the menu item by ID
        $testimonial = Testimonial::find($id);
    
        // Check if the menu item exists
        if ($testimonial) {
            // Update the menu item with the new values
            $testimonial->update([
                'name' => $request->values[0],
                'title' => $request->values[1],
                'comment' => $request->values[2],
            ]);
    
            // Optionally, you can return a response or redirect the user
            return response()->json(['success' => true, 'message' => 'Testimonial updated successfully']);
        } else {
            // Handle the case where the menu item with the specified ID was not found
            return response()->json(['success' => false, 'message' => 'Testimonial not found'], 404);
        }
    }
}
