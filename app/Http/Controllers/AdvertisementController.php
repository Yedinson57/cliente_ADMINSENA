<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
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
        $advertisements = $this->fetchDataFromApi($url . '/advertisements');

        return view('advertisements.index', compact('advertisements'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $advertisements = $this->fetchDataFromApi($url . '/advertisements/' . $id);

        return view('advertisements.show', compact('advertisements'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = Http::get($url .'/trainingcenters')->json();

        return view('advertisements.create',compact('trainingcenters'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/advertisements', $request->all());

        return redirect()->route('advertisements.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingcenters = Http::get($url .'/trainingcenters')->json();
        $advertisement = $this->fetchDataFromApi($url . '/advertisements/' . $id);
        return view('advertisements.edit', compact('advertisement','trainingcenters'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/advertisements/' . $id, $request->all());

        return redirect()->route('advertisements.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/advertisements/' . $id);
        return redirect()->route('advertisements.index');
    }
}
