<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    protected $key = "372146ea941c8f928014866aba042c0f";

    public function province()
    {
        $response = Http::withHeaders([
                'key' => $this->key
            ])->get('https://api.rajaongkir.com/starter/province');
        $data['results'] = json_decode($response->body(), true);

        // dd($data);

        return view('ongkir.province', $data);
    }

    public function city($id)
    {
        $response = Http::withHeaders([
                'key' => $this->key
            ])->get('https://api.rajaongkir.com/starter/city',[
                'province' => $id
            ]);
        $data['results'] = json_decode($response->body(), true);

        return view('ongkir.city', $data);
    }
}
