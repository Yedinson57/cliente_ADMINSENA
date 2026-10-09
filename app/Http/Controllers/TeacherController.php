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

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url .'/areas')->json();
        $trainingcenters = Http::get($url .'/trainingcenters')->json();

        return view('teachers.create',compact('areas','trainingcenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/teachers', $request->all());

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url .'/areas')->json();
        $trainingcenters = Http::get($url .'/trainingcenters')->json();
        $teacher = $this->fetchDataFromApi($url . '/teachers/' . $id);
        return view('teachers.edit', compact('teacher','areas','trainingcenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/teachers/' . $id, $request->all());

        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/teachers/' . $id);
        return redirect()->route('teachers.index');
    }
}