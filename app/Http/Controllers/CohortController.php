<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class CohortController extends Controller
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
        $cohorts = $this->fetchDataFromApi($url . '/cohorts');

        return view('cohorts.index', compact('cohorts'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $cohorts = $this->fetchDataFromApi($url . '/cohorts/' . $id);

        return view('cohorts.show', compact('cohorts'));
    }
}
