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

    public function create()
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = Http::get($url .'/trainingcenters')->json();
        $cohorts = Http::get($url .'/cohorts')->json();
        $environments = Http::get($url .'/environments')->json();

        return view('courses.create',compact('trainingcenters','cohorts','environments'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/courses', $request->all());

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = Http::get($url .'/trainingcenters')->json();
        $cohorts = Http::get($url .'/cohorts')->json();
        $environments = Http::get($url .'/environments')->json();
        $course = $this->fetchDataFromApi($url . '/courses/' . $id);
        
        return view('courses.edit', compact('course','trainingcenters','cohorts','environments'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/courses/' . $id, $request->all());

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/courses/' . $id);
        return redirect()->route('courses.index');
    }
}
