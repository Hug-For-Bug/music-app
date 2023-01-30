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
            // return response()->json([
            //     "success" => false,
            //     "message" => "Email / Password yang anda masukkan salah!"
            // ]);
            return redirect("/login");
        } else {
            $user = Auth::user();
            // return response()->json([
            //     "success" => true,
            //     "message" => "Login Berhasil",
            //     "user" => $user,
            //     "redirect" => "administrator"
            // ]);
            dd($user);
        }
    }

    public function register()
    {
        // $data["role"] = DB::select("SELECT * FROM role");
        $data["navbarType"] = "top";
        $data["login"] = true;
        return view("register", $data);
    }

    public function postRegister(Request $req)
    {
        User::create([
            "id" => "3cf5f68a-a0b8-11ed-9025-00163e01b81a",
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
