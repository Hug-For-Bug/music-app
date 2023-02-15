<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.pages.home");
    }
    public function listData()
    {
        $data['role'] = DB::select("SELECT * FROM role");
        $data['plan'] = DB::select("SELECT * FROM plan");
        return view("admin.pages.list-data");
    }

    public function postUser(Request $req)
    {
        $uuid = DB::select("SELECT uuid() as uuid");
        User::create([
            "id" => $uuid,
            "photo" => $req->photo,
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => $req->id_role,
            "verified_status" => "0",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
        return redirect("/administrator/list-data");
    }
}
