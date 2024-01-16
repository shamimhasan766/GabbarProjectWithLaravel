<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    function Portfolio(){
        $Portfolio = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $portfolios = Portfolio::all();
        return view('portfolio', ['portfolios'=> $portfolios , 'messages'=> $messages, 'Portfolio'=>$Portfolio]);
    }

    function AddPortfolio(Request $request){
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ], [
            'required' => 'The :attribute field is required.',
            'image' => 'The :attribute must be an image.',
            'mimes' => 'The :attribute must be a file of type: jpeg, png, jpg, gif.',
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'category.required' => 'The category field is required.',
            'category.string' => 'The category must be a string.',
        ]);

        $image = $request->file('image');
    
        // Move the uploaded file to a designated directory (you may want to customize this)
        $uploadPath = 'uploads/portfolio/';
        $fileName = 'portfolio'. uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move(public_path($uploadPath), $fileName);
        // Create a new instance of YourModel
        $newPortfolio = new Portfolio;

        // Assign values from the request to the model properties
        $newPortfolio->name = $request->name;
        $newPortfolio->category = $request->category;
        $newPortfolio->image = $uploadPath.$fileName;

        // Save the new menu to the database
        $newPortfolio->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('portfolio')->with('success', 'Portfolio added successfully');
    }

    public function deletePortfolio(Request $request, $id)
    {
        $portfolio = Portfolio::find($id);

        if ($portfolio) {
            // Get the upload path and file name
            $filePath = $portfolio->image;

            // Delete the image file
            if (File::exists(public_path($filePath))) {
                File::delete(public_path($filePath));
            }

            // Delete the service
            $portfolio->delete();

            return redirect()->route('portfolio')->with('delete', 'Portfolio deleted successfully');
        } else {
            // Handle the case where the promo with the specified ID was not found
            return redirect()->route('portfolio')->with('error', 'Portfolio not found');
        }
    }

    function EditPortfolio(Request $request){
        $id = $request->id;
    
        $request->validate([
            'values.0' => 'required|string',
            'values.1' => 'required|string',
        ]);
    
        // Retrieve the menu item by ID
        $portfolio = Portfolio::find($id);
    
        // Check if the menu item exists
        if ($portfolio) {
            // Update the menu item with the new values
            $portfolio->update([
                'name' => $request->values[0],
                'category' => $request->values[1],
            ]);
    
            // Optionally, you can return a response or redirect the user
            return response()->json(['success' => true, 'message' => 'Portfolio updated successfully']);
        } else {
            // Handle the case where the menu item with the specified ID was not found
            return response()->json(['success' => false, 'message' => 'Portfolio not found'], 404);
        }
    }
}
