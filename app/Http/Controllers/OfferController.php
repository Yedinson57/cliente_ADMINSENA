<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class OfferController extends Controller
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
        $offers = $this->fetchDataFromApi($url . '/offers');

        return view('offers.index', compact('offers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $offers = $this->fetchDataFromApi($url . '/offers/' . $id);

        return view('offers.show', compact('offers'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $programs = Http::get($url .'/programs')->json();

        return view('offers.create',compact('programs'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/offers', $request->all());

        return redirect()->route('offers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $programs = Http::get($url .'/programs')->json();
        $offer = $this->fetchDataFromApi($url . '/offers/' . $id);
        return view('offers.edit', compact('offer','programs'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/offers/' . $id, $request->all());

        return redirect()->route('offers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/offers/' . $id);
        return redirect()->route('offers.index');
    }
}
