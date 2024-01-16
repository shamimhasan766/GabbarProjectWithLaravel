<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Menu;
use App\Models\Message;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    function MenuBar(){
        $Menu = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        $menus = Menu::all();
        return view('menubar', ['menus' => $menus, 'messages'=> $messages, 'Menu'=>$Menu]);
    }
    

    function AddMenu(Request $request)
    {
    
        // Validate the request data
        $request->validate([
            'menu' => 'required|string',
            'link' => 'nullable|string',
        ]);

        // Create a new instance of YourModel
        $newMenu = new Menu;

        // Assign values from the request to the model properties
        $newMenu->menu = $request->menu;
        $newMenu->link = $request->link;

        // Save the new menu to the database
        $newMenu->save();

        // Optionally, you can return a response or redirect the user
        return redirect()->route('menubar')->with('success', 'Menu added successfully');
    }
    public function deleteMenu(Request $request, $id)
    {
        // Find the menu by its ID
        $menu = Menu::find($id);

        // Check if the menu exists
        if ($menu) {
            // Delete the menu
            $menu->delete();

            return redirect()->route('menubar')->with('delete', 'Menu deleted successfully');
        } else {
            // Handle the case where the menu with the specified ID was not found
            return redirect()->route('menu')->with('error', 'Menu not found');
        }
    }


function EditMenu(Request $request){
    $id = $request->id;

    $request->validate([
        'values.0' => 'required|string',
        'values.1' => 'required|string',
    ]);

    // Retrieve the menu item by ID
    $menu = Menu::find($id);

    // Check if the menu item exists
    if ($menu) {
        // Update the menu item with the new values
        $menu->update([
            'menu' => $request->values[0],
            'link' => $request->values[1],
        ]);

        // Optionally, you can return a response or redirect the user
        return response()->json(['success' => true, 'message' => 'Menu updated successfully']);
    } else {
        // Handle the case where the menu item with the specified ID was not found
        return response()->json(['success' => false, 'message' => 'Menu not found'], 404);
    }
}

}
