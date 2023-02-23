<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data["navbarType"] = "top";
        $data["login"] = false;
        $data["title"] = "Home";
        return view("user.pages.home", $data);
    }

    public function categories()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Category";
        return view("user.pages.category", $data);
    }

    public function albums()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Albums";
        return view("user.pages.album", $data);
    }

    public function artist()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Artist";
        return view("user.pages.artist", $data);
    }

    public function profile()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        $data["title"] = "Profile";
        return view("user.pages.profile", $data);
    }
}
