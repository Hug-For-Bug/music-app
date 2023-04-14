<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data["navbarType"] = "top";
        $data["login"] = false;
        $data["title"] = "Home";
        $data['user'] = Auth::user();
        return view("user.pages.home", $data);
    }

    public function categories()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Category";
        $data['user'] = Auth::user();
        return view("user.pages.category", $data);
    }

    public function albums()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Albums";
        $data['user'] = Auth::user();
        return view("user.pages.album", $data);
    }

    public function artist()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Artist";
        $data['user'] = Auth::user();
        return view("user.pages.artist", $data);
    }

    public function profile()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Profile";
        $data['user'] = Auth::user();
        return view("user.pages.profile", $data);
    }
    
    public function getMusic()
    {
        $data['list'] = curl.get('https://deezerdevs-deezer.p.rapidapi.com/album');
        return $data;
    }
}
