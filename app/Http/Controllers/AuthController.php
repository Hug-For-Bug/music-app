<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    const ROLE_USER = 'User';
    const PLAN_FREE = 'Free';
    const REDIRECT_ADMIN = 'administrator';
    const REDIRECT_USER = 'user';

    public function index()
    {
        $data["navbarType"] = "top";
        $data["login"] = true;
        $data["title"] = "Login";
        $data['user'] = Auth::user();
        return view("login", $data);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                "success" => false,
                "message" => "Email or password you entered is incorrect!",
            ]);
        }

        $user = Auth::user();
        $redirect = $user->id_role == 1 ? self::REDIRECT_ADMIN : self::REDIRECT_USER;
        return response()->json([
            "success" => true,
            "message" => "Login Success",
            "user" => $user,
            "redirect" => $redirect,
        ]);
    }

    public function register()
    {
        $data["navbarType"] = "top";
        $data["login"] = true;
        $data["title"] = "Register";
        $data['user'] = Auth::user();
        return view("register", $data);
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:6',
        ]);

        $user = $this->createUser($request->all());

        return response()->json([
            "success" => true,
            "message" => "User has been registered!",
        ]);
    }

    private function createUser(array $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        $uuid = uniqid();
        $general = $this->getAdditionalInfo();

        return User::create([
            "id" => $uuid,
            "name" => $data['name'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "password" => Hash::make($data['password']),
            "id_plan" => $general['id_plan'],
            "id_role" => $general['id_role'],
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s"),
        ]);
    }

    private function checkEmailAvailability($email)
    {
        return User::where('email', $email)->exists();
    }

    private function checkPhoneAvailability($phone)
    {
        return User::where('phone', $phone)->exists();
    }

    public function getAdditionalInfo()
    {
        $userRole = DB::table('roles')->where('role_name', self::ROLE_USER)->first();
        $freePlan = DB::table('plans')->where('plan_name', self::PLAN_FREE)->first();
        return [
            'id_role' => $userRole->id,
            'id_plan' => $freePlan->id,
        ];
    }

    public function logout()
    {
        auth()->logout();
        session()->flash("message", "You Have Been Logged Out");
        return redirect("/login");
    }
}
