<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class PageController extends Controller
{
    public function welcome()
    {
        $quotes = [];
        for ($i=0; $i < 5; $i++) {
            $response = Http::get('https://api.kanye.rest');
            $quotes[] = $response->json()['quote'];
        }

        return view('welcome', [
            'quotes' => $quotes
        ]);
    }

}
