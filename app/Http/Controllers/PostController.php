<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post(Request $request) {
        Post::create([
            'autor' => Auth::user()->nickname,
            'content' => $request->content,
            'postDate' => date('Y-m-d h:i:s', time()),
        ]);
        return redirect('home');
    }

    
}
