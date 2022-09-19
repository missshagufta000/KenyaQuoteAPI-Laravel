<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class QuotesAPIController extends Controller
{
    public function getFiveQuotes()
    {
        $quotes = [];
        for ($i = 0; $i < 5; $i++) {
            $response = Http::get('https://api.kanye.rest');
            $quotes[] = $response->json()['quote'];
        }
        return response()->json(array('quotes'=>$quotes));
    }
}
