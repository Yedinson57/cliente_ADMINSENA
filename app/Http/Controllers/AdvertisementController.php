<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()   
    {

        $url = env('URL_SERVER_API');
        $advertisements = $this->fetchDataFromApi($url . '/advertisements');

        return view('advertisements.index', compact('advertisements'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $advertisements = $this->fetchDataFromApi($url . '/advertisements/' . $id);

        return view('advertisements.show', compact('advertisements'));
    }
}
