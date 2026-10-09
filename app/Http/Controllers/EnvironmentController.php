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

    public function create()
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = Http::get($url .'/trainingcenters')->json();

        return view('environments.create',compact('trainingcenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/environments', $request->all());

        return redirect()->route('environments.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = Http::get($url .'/trainingcenters')->json();
        $environment = $this->fetchDataFromApi($url . '/environments/' . $id);
        return view('environments.edit', compact('environment','trainingcenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/environments/' . $id, $request->all());

        return redirect()->route('environments.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/environments/' . $id);
        return redirect()->route('environments.index');
    }
}