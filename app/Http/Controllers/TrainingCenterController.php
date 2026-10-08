<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
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
        $trainingcenters = $this->fetchDataFromApi($url . '/trainingcenters');

        return view('trainingcenters.index', compact('trainingcenters'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $trainingcenters = $this->fetchDataFromApi($url . '/trainingcenters/' . $id);

        return view('trainingcenters.show', compact('trainingcenters'));
    }
}
