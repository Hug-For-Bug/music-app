<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function addUser(Request $req)
    {
        $email = $req->email;
        $phone = $req->phone;
        $checkEmail = User::where('email', $email)->get();
        if ($checkEmail->isNotEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "Email has been used, choose other email!"
            ]);
        }
        $checkPhone = User::where('phone', $phone)->get();
        if ($checkPhone->isNotEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "Phone has been used, choose other Phone!"
            ]);
        }

        $file = $req->file('photo');
        //Cek atau validasi gambar yang harus sesuai format
        if (!$file->isValid() || !in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg', 'png'])) {
            return response()->json([
                "success" => false,
                "message" => "Invalid photo format, please choose a JPEG or PNG image."
            ]);
        }

        // Cek atau validasi photo agar ukuran tidak terlalu besar
        if ($file->getSize() > 2048 * 1024) {
            return response()->json([
                "success" => false,
                "message" => "Photo size exceeds the maximum allowed size of 2 MB."
            ]);
        }
        date_default_timezone_set("Asia/Jakarta");
        User::create([
            "id" => $this->getUUID(),
            "photo" => $file->store(
                'asset/images/user',
                'public'
            ),
            "name" => $req->first_name . " " . $req->last_name,
            "email" => $email,
            "phone" => $phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => $req->id_plan,
            "id_role" => $req->id_role,
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);

        return response()->json([
            "success" => true,
            "message" => "User has been created"
        ]);
        // return redirect("/administrator/list-data")
        //     ->with([
        //         "msg_success_user_create" => "berhasil",
        //         "success" => true,
        //         "message" => "User has been created"
        //     ]);
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
            "id_plan" => "$req->id_plan",
            "id_role" => $req->id_role,
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
        return redirect("/administrator/list-data")
            ->with("msg_success_user_edit", "berhasil");
        // return response()->json([
        //     "success" => true,
        //     "message" => "User has been updated"
        // ]);
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
