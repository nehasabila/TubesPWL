<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $post = Post::count();
        $penulis = User::where('status', '=', 'penulis')->count();
        $pembaca = User::where('status', '=', 'pembaca')->count();

        return view('user.dashboard', compact('post', 'penulis','pembaca'));
        //
    }
}
