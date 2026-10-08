<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        $teachers = $this->fetchDataFromApi($url . '/teachers');

        return view('teachers.index', compact('teachers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $teachers = $this->fetchDataFromApi($url . '/teachers/' . $id);

        return view('teachers.show', compact('teachers'));
    }
}