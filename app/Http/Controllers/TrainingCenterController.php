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

    public function create()
    {
        return view('trainingcenters.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/trainingcenters', $request->all());

        return redirect()->route('trainingcenters.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenter = $this->fetchDataFromApi($url . '/trainingcenters/' . $id);
        return view('trainingcenters.edit', compact('trainingcenter'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/trainingcenters/' . $id, $request->all());

        return redirect()->route('trainingcenters.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/trainingcenters/' . $id);
        return redirect()->route('trainingcenters.index');
    }
}
