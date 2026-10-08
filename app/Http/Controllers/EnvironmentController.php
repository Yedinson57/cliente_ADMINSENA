<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
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
        $environments = $this->fetchDataFromApi($url . '/environments');

        return view('environments.index', compact('environments'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $environments = $this->fetchDataFromApi($url . '/environments/' . $id);

        return view('environments.show', compact('environments'));
    }
}