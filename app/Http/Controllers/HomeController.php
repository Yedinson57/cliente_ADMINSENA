<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtenemos los datos de la base de datos
        $url = env('URL_SERVER_API');
        
        $offers = Http::get($url .'/offers')->json();
        $advertisements = Http::get($url .'/advertisements')->json();
        $programs = Http::get($url .'/programs')->json();

        // Pasamos las variables a la vista 'home'
        return view('home', compact('offers', 'advertisements', 'programs'));
    }
}