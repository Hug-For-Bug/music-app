<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.pages.home");
    }
    public function listData()
    {
        $data['listData'] = User::all();
        return view("admin.pages.list-data", $data);
    }
}
