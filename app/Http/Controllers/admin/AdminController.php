<?php

namespace App\Http\Controllers\admin;


use App\Models\Plan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.pages.home");
    }
    public function listData()
    {
        $data["plans"] = Plan::where('plan_name', '!=', 'Admin')->get();
        $data["listData"] = User::all();
        return view("admin.pages.list-data", $data);
    }
}
