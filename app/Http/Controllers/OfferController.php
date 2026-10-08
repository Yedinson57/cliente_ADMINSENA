<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class OfferController extends Controller
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
        $offers = $this->fetchDataFromApi($url . '/offers');

        return view('offers.index', compact('offers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $offers = $this->fetchDataFromApi($url . '/offers/' . $id);

        return view('offers.show', compact('offers'));
    }
}
