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
        return view("admin.pages.list-data");
    }

    public function postAdmin(Request $req)
    {
        $uuid = DB::select("SELECT uuid() as uuid");
        User::create([
            "id" => $uuid[0]->uuid,
            "photo" => $req->photo,
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => "1",
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
    }

    public function postUser(Request $req)
    {
        $uuid = DB::select("SELECT uuid() as uuid");
        User::create([
            "id" => $uuid[0]->uuid,
            "photo" => $req->photo,
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => "2",
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
    }
}
