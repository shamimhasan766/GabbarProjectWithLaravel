<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Menu;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{



    







    function CommentSection(){
        return view('commentsection');
    }
    function AllComments(){
        return view('allcomments');
    }
    function Copyright(){
        $Copyright = 'visibility';
        $messages = Message::orderBy('id', 'desc')->take(6)->get();
        return view('copyright', ['messages'=>$messages, 'Copyright'=>$Copyright]);
    }
}
