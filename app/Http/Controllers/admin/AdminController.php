<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.pages.home");
    }
    public function listAdmin()
    {
        return view("admin.pages.list-admin");
    }
    public function listUser()
    {
        return view("admin.pages.list-user");
    }
}
