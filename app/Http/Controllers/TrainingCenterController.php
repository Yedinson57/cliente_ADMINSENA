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
        $trainingcenters = $this->fetchDataFromApi($url . '/trainingcenter/list');

        return view('trainingcenter.index', compact('trainingcenters'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $trainingcenters = $this->fetchDataFromApi($url . '/trainingcenter/' . $id);

        return view('trainingcenter.show', compact('trainingcenters'));
    }
}
