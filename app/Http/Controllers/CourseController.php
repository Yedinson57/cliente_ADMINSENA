<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CourseController extends Controller
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
        $courses = $this->fetchDataFromApi($url . '/courses');

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $courses = $this->fetchDataFromApi($url . '/courses/' . $id);

        return view('courses.show', compact('courses'));
    }
}
