<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProgramController extends Controller
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
        $programs = $this->fetchDataFromApi($url . '/programs');

        return view('programs.index', compact('programs'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $programs = $this->fetchDataFromApi($url . '/programs/' . $id);

        return view('programs.show', compact('programs'));
    }
}
