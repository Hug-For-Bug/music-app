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
        $data = [
            "navbarType" => "top",
            "login" => true,
            "title" => "Login",
            "user" => Auth::user(),
        ];
        return view("login", $data);
    }

    public function login(Request $request)
    {
        $credentials = $request->only("email", "password");

        if (!Auth::attempt($credentials)) {
            return response()->json([
                "success" => false,
                "message" => "Email or password you entered is incorrect!",
            ]);
        }

        $user = Auth::user();
        $redirect = ($user->id_role == 1) ? "administrator" : "user";

        return response()->json([
            "success" => true,
            "message" => "Login Success",
            "user" => $user,
            "redirect" => $redirect,
        ]);
    }

    public function register()
    {
        $data = [
            "navbarType" => "top",
            "login" => true,
            "title" => "Register",
            "user" => Auth::user(),
        ];
        return view("register", $data);
    }

    public function postRegister(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $uuid = DB::select("SELECT uuid() as uuid")[0]->uuid;
        $email = $request->email;
        $phone = $request->phone;

        $checkEmail = DB::select("SELECT count(*) as total FROM users WHERE email = ?", [$email])[0]->total;
        if ($checkEmail != 0) {
            return response()->json([
                "success" => false,
                "message" => "Email has been used, choose other email!",
            ]);
        }

        $checkPhone = DB::select("SELECT count(*) as total FROM users WHERE phone = ?", [$phone])[0]->total;
        if ($checkPhone != 0) {
            return response()->json([
                "success" => false,
                "message" => "Phone has been used, choose other phone number!",
            ]);
        }

        $general = $this->getAdditionalInfo();
        User::create([
            "id" => $uuid,
            "name" => $request->name,
            "email" => $email,
            "phone" => $phone,
            "password" => Hash::make($request->password),
            "id_plan" => $general['id_plan'],
            "id_role" => $general['id_role'],
            "verified_status" => "1",
            "verified_at" => now(),
        ]);

        return response()->json([
            "success" => true,
            "message" => "User has been registered!",
        ]);
    }

    public function getAdditionalInfo()
    {
        $user = DB::select("SELECT * FROM roles WHERE role_name = 'User'")[0];
        $free = DB::select("SELECT * FROM plans WHERE plan_name = 'Free'")[0];

        return [
            'id_role' => $user->id,
            'id_plan' => $free->id,
        ];
    }

    public function logout()
    {
        auth()->logout();
        
        return redirect("/login");
    }
}
