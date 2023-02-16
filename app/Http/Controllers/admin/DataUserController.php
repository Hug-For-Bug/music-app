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
        date_default_timezone_set('Asia/Jakarta');
        User::create([
            "id" => $this->getUUID(),
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

    public function editUser(Request $req)
    {
        // dd($req->all());
        date_default_timezone_set('Asia/Jakarta');
        $user = User::where('id', $req->id);

        $user->update([
            "photo" => $req->photo,
            "name" => $req->name,
            "email" => $req->email,
            "phone" => $req->phone,
            "gender" => $req->gender,
            "password" => Hash::make($req->password),
            "id_plan" => "1",
            "id_role" => $req->id_role,
            "verified_status" => "1",
            "verified_at" => date("Y-m-d H:i:s")
        ]);
        return redirect("/administrator/list-data");
    }

    // public function deleteUser()
    // {
    // }

    public function getUUID()
    {
        $uuid = DB::select("SELECT uuid() as uuid");
        return $uuid[0]->uuid;
    }
}
