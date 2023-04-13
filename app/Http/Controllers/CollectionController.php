<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class CollectionController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('token');

        $token_dec = Crypt::decryptString($token);

        $response = Http::withToken($token_dec)->get('http://172.168.102.134:7889/api/collections');

        $response = Http::withToken($token_dec)->post('http://172.168.102.134:7889/api/collections', [
            'ximage' => $request->image,
            'xname' => $request->name,
            'xprice' => $request->price,
            'xdesc' => $request->desc,
        ]);

        $data = json_decode($response->body());

        return view('pages.collection', compact('data'));
    }
}