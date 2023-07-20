<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        $data["navbarType"] = "top";
        $data["login"] = true;
        $data['user'] = Auth::user();
        return view("login", $data);
    }


    public function register()
    {
        $data["navbarType"] = "top";
        $data["login"] = true;
        $data['user'] = Auth::user();
        return view("register", $data);
    }

    public function postRegister(Request $req)
    {
        date_default_timezone_set('Asia/Jakarta');
        $getUUID = DB::select("SELECT uuid() as uuid");
        $uuid = $getUUID[0]->uuid;
        User::create([
            "id" => $uuid,
            "name" => $req->name,
            "email" => $email,
            "phone" => $phone,
            "password" => Hash::make($req->password),
            "id_plan" => $general['id_plan'],
            "id_role" => $general['id_role'],
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
        return response()->json([
            "success" => true,
            "message" => "User has been registered!"
        ]);
    }


    public function logout()
    {
        auth()->logout();
        session()->flash("message", "You Have Been Logged Out");
        return redirect("/login");
    }
}
