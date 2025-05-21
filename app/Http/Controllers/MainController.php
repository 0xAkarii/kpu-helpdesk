<?php

namespace App\Http\Controllers;

use view;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function view() {
        
        $userId = auth()->id();
    
        $postCount = Post::where('author_id', $userId)->count();
    
        $userCount = User::count();
    
        return view('dashboard.index', compact('postCount', 'userCount'));
    }
    
}
