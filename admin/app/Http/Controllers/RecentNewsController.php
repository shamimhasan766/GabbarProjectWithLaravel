<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\RecentNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RecentNewsController extends Controller
{
    function RecentNews(){
        $news = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $recentnews = RecentNews::all();
        return view('recentnews', ['recentnews'=> $recentnews , 'messages'=> $messages, 'news'=>$news]);
    }
    function AddRecentNews(Request $request){
        // Validate the request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'short_desc' => 'required|string',
            'caption' => 'required|string',
            'author' => 'required|string',
            'link' => 'required|string',
        ], [
            'required' => 'The :attribute field is required.',
            'image' => 'The :attribute must be an image.',
            'mimes' => 'The :attribute must be a file of type: jpeg, png, jpg, gif.',
            'short_desc.required' => 'The Description field is required.',
            'short_desc.string' => 'The Description must be a string.',
            'caption.required' => 'The Caption field is required.',
            'caption.string' => 'The Caption must be a string.',
            'author.required' => 'The author must be a string.',
            'author.string' => 'The author must be a string.',
            'link.required' => 'The link must be a string.',
            'link.string' => 'The link must be a string.',
        ]);

        $image = $request->file('image');
    
        // Move the uploaded file to a designated directory (you may want to customize this)
        $uploadPath = 'uploads/recentnews/';
        $fileName = 'news'. uniqid(). '.' . $image->getClientOriginalExtension();

        $image->move(public_path($uploadPath), $fileName);
        // Create a new instance of YourModel
        $newNews = new RecentNews;

        // Assign values from the request to the model properties
        $newNews->caption = $request->caption;
        $newNews->short_desc = $request->short_desc;
        $newNews->author = $request->author;
        $newNews->link = $request->link;
        $newNews->image = $uploadPath.$fileName;

        // Save the new menu to the database
        $newNews->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('recentnews')->with('success', 'News added successfully');
    }

    public function deleteNews(Request $request, $id)
    {
        $news = RecentNews::find($id);

        if ($news) {
            // Get the upload path and file name
            $filePath = $news->image;

            // Delete the image file
            if (File::exists(public_path($filePath))) {
                File::delete(public_path($filePath));
            }

            // Delete the service
            $news->delete();

            return redirect()->route('recentnews')->with('delete', 'News deleted successfully');
        } else {
            // Handle the case where the promo with the specified ID was not found
            return redirect()->route('recentnews')->with('error', 'News not found');
        }
    }

    function EditNews(Request $request){
        $id = $request->id;
    
        $request->validate([
            'values.0' => 'required|string',
            'values.1' => 'required|string',
            'values.2' => 'required|string',
            'values.3' => 'required|string',
        ]);
    
        // Retrieve the menu item by ID
        $news = RecentNews::find($id);
    
        // Check if the menu item exists
        if ($news) {
            // Update the menu item with the new values
            $news->update([
                'caption' => $request->values[0],
                'short_desc' => $request->values[1],
                'author' => $request->values[1],
                'link' => $request->values[1],
            ]);
    
            // Optionally, you can return a response or redirect the user
            return response()->json(['success' => true, 'message' => 'News updated successfully']);
        } else {
            // Handle the case where the menu item with the specified ID was not found
            return response()->json(['success' => false, 'message' => 'News not found'], 404);
        }
    }
}
