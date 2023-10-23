<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
// use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function index()
    {
        $data["navbarType"] = "top";
        $data["footer"] = "home";
        $data["login"] = false;
        $data["title"] = "Home";
        $data['user'] = Auth::user();
        return view("user.pages.home", $data);
    }

    public function categories()
    {
        $data["navbarType"] = "side";
        $data["footer"] = "other";
        $data["login"] = false;
        $data["title"] = "Category";
        $data['user'] = Auth::user();
        return view("user.pages.category", $data);
    }

    public function albums()
    {
        $data["navbarType"] = "side";
        $data["footer"] = "other";
        $data["login"] = false;
        $data["title"] = "Albums";
        $data['user'] = Auth::user();
        return view("user.pages.album", $data);
    }

    public function artist()
    {
        $data["navbarType"] = "side";
        $data["footer"] = "other";
        $data["login"] = false;
        $data["title"] = "Artist";
        $data['user'] = Auth::user();
        return view("user.pages.artist", $data);
    }

    public function profile()
    {
        $data["navbarType"] = "side";
        $data["footer"] = "other";
        $data["login"] = false;
        $data["title"] = "Profile";
        $data['user'] = Auth::user();
        return view("user.pages.profile", $data);
    }

    public function getMusic() {
        $client = new Client();
        $response = $client->request('GET', 'https://deezerdevs-deezer.p.rapidapi.com/search?q=jadi-kekasihku-saja', [
            'headers' => [
                'X-RapidAPI-Host' => 'deezerdevs-deezer.p.rapidapi.com',
                'X-RapidAPI-Key' => '119364511dmsh946adb6e5c8987bp178763jsnf49939bfd585',
            ],
        ]);

        $data = json_decode($response->getBody());

        return response()->json($data);
        // echo $response->getBody();

    }
}
