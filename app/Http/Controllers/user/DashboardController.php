<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data["navbarType"] = "top";
        $data["login"] = false;
        return view("user.pages.home", $data);
    }
    public function categories()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        return view("user.pages.category", $data);
    }
    public function albums()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        return view("user.pages.album", $data);
    }
    public function artist()
    {
        $data["navbarType"] = "side";
        $data["login"] = false;
        return view("user.pages.artist", $data);
    }
}
