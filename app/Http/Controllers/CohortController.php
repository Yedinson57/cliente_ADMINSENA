<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class CohortController extends Controller
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
        $cohorts = $this->fetchDataFromApi($url . '/cohorts');

        return view('cohorts.index', compact('cohorts'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');
        $cohorts = $this->fetchDataFromApi($url . '/cohorts/' . $id);

        return view('cohorts.show', compact('cohorts'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        $offers = Http::get($url .'/offers')->json();

        return view('cohorts.create',compact('offers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/cohorts', $request->all());

        return redirect()->route('cohorts.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $offers = Http::get($url .'/offers')->json();
        $cohort = $this->fetchDataFromApi($url . '/cohorts/' . $id);
        return view('cohorts.edit', compact('cohort','offers'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/cohorts/' . $id, $request->all());

        return redirect()->route('cohorts.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/cohorts/' . $id);
        return redirect()->route('cohorts.index');
    }
}
