<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function addUser(Request $req)
    {
        date_default_timezone_set("Asia/Jakarta");
        User::create([
            "id" => $this->getUUID(),
            "photo" => $req->photo,
            "photo" => $req->file('photo')->store(
                'asset/images/user',
                'public'
            ),
            "name" => $req->first_name . " " . $req->last_name,
            "email" => $req->email,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => $req->id_role,
            "verified_status" => "0",
            "verified_at" => date("Y-m-d H:i:s")
        ]);

        // return response()->json([
        //     "success" => true,
        //     "message" => "User has been created"
        // ]);

        return redirect("/administrator/list-data")
            ->with("msg_success_user_create", "berhasil");
    }

    public function editUser(Request $req)
    {
        date_default_timezone_set("Asia/Jakarta");
        User::where("id", $req->id)->update([
            "photo" => $req->photo,
            "name" => $req->first_name . " " . $req->last_name,
            "email" => $req->email,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => $req->id_role,
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
        // return redirect("/administrator/list-data")
        //     ->with("msg_success_user_edit", "berhasil");
        return response()->json([
            "success" => true,
            "message" => "User has been updated"
        ]);
    }

    public function deleteUser(Request $req)
    {
        User::where("id", $req->id)->delete();
        return redirect("/administrator/list-data")
            ->with("msg_success_user_delete", "berhasil");
    }

    public function getUUID()
    {
        $uuid = DB::select("SELECT uuid() as uuid");
        return $uuid[0]->uuid;
    }
}
