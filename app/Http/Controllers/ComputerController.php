<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ComputerController extends Controller
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
        $computers = $this->fetchDataFromApi($url . '/computers');

        return view('computers.index', compact('computers'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $computers = $this->fetchDataFromApi($url . '/computers/' . $id);

        return view('computers.show', compact('computers'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $environments = Http::get($url .'/environments')->json();

        return view('computers.create',compact('environments'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/computers', $request->all());

        return redirect()->route('computers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $environments = Http::get($url .'/environments')->json();
        $computer = $this->fetchDataFromApi($url . '/computers/' . $id);
        return view('computers.edit', compact('computer','environments'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/computers/' . $id, $request->all());

        return redirect()->route('computers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/computers/' . $id);
        return redirect()->route('computers.index');
    }
}
