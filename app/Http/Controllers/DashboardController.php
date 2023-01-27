<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data["navbarType"] = "top";
        return view("pages.home", $data);
    }
    public function categories()
    {
        $data["navbarType"] = "side";
        return view("pages.category", $data);
    }
    public function albums()
    {
        $data["navbarType"] = "side";
        return view("pages.album", $data);
    }
    public function artist()
    {
        $data["navbarType"] = "side";
        return view("pages.artist", $data);
    }
}
