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

    public function create()
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url .'/areas')->json();

        return view('programs.create',compact('areas'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/programs', $request->all());

        return redirect()->route('programs.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $areas = Http::get($url .'/areas')->json();
        $program = $this->fetchDataFromApi($url . '/programs/' . $id);
        return view('programs.edit', compact('program','areas'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/programs/' . $id, $request->all());

        return redirect()->route('programs.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/programs/' . $id);
        return redirect()->route('programs.index');
    }
}
