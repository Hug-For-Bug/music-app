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
        $data["title"] = "Login";
        $data['user'] = Auth::user();
        return view("login", $data);
    }

    public function login(Request $req)
    {
        if (!Auth::attempt(["email" => $req->email, "password" => $req->password])) {
            return response()->json([
                "success" => false,
                "message" => "Email or password you entered is incorrect!"
            ]);
        } else {
            $user = Auth::user();
            if ($user->id_role == 1) {
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
        $data["title"] = "Register";
        $data['user'] = Auth::user();
        return view("register", $data);
    }

    public function postRegister(Request $req)
    {
        date_default_timezone_set('Asia/Jakarta');
        $getUUID = DB::select("SELECT uuid() as uuid");
        $uuid = $getUUID[0]->uuid;
        $general = $this->getAdditionalInfo();

        $email = $req->email;
        $phone = $req->phone;
        $checkEmail = DB::select("SELECT count(*) as total FROM users WHERE email = '$email'");
        if ($checkEmail[0]->total != 0) {
            return response()->json([
                "success" => false,
                "message" => "Email has been used, choose other email!"
            ]);
        }
        $checkPhone = DB::select("SELECT count(*) as total FROM users WHERE phone = '$phone'");
        if ($checkPhone[0]->total != 0) {
            return response()->json([
                "success" => false,
                "message" => "Phone has been used, choose other phone number!"
            ]);
        }

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

    public function getAdditionalInfo()
    {
        $user = DB::select("SELECT * FROM roles WHERE role_name = 'User'");
        $free = DB::select("SELECT * FROM plans WHERE plan_name = 'Free'");
        $data = [
            'id_role' => $user[0]->id,
            'id_plan' => $free[0]->id
        ];
        return $data;
    }

    public function logout()
    {
        auth()->logout();
        session()->flash("message", "You Have Been Logged Out");
        return redirect("/login");
    }
}
