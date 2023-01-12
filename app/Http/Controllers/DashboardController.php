<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function categories()
    {
        return view('pages.category');
    }
    public function albums()
    {
        return view('pages.album');
    }
    public function artist()
    {
        return view('pages.artist');
    }
}
