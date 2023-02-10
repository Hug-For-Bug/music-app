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
        return view("login", $data);
    }

    public function login(Request $req)
    {
        if (!Auth::attempt(["email" => $req->email, "password" => $req->password])) {
            return response()->json([
                "success" => false,
                "message" => "Email / Password yang anda masukkan salah!"
            ]);
            return redirect("/login");
        } else {
            $user = Auth::user();
            if($user->id_role == 1){
               return response()->json([
                    "success" => true,
                    "message" => "Login Success",
                    "user" => $user,
                    "redirect" => "administrator"
                ]); 
            } else {
                return response()->json([
                    "success" => true,
                    "message" => "Login Success",
                    "user" => $user,
                    "redirect" => "user"
                ]);
            }
            
        }
    }

    public function register()
    {
        $data["navbarType"] = "top";
        $data["login"] = true;
        return view("register", $data);
    }

    public function postRegister(Request $req)
    {
        date_default_timezone_set('Asia/Jakarta');
        $uuid = DB::select("SELECT uuid() as uuid");
        User::create([
            "id" => $uuid[0]->uuid,
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => "1",
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
        return redirect("/");
    }

    public function logout()
    {
        auth()->logout();
        session()->flash("message", "You Have Been Logged Out");
        return redirect("/login");
    }
}
