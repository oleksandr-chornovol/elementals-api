<?php

namespace App\Http\Controllers\Joke;

use App\Http\Controllers\Controller;
use App\Models\Joke\JokeComment;
use Illuminate\Http\JsonResponse;

class JokeController extends Controller
{
    public function getRandomJoke(): JsonResponse
    {
        $joke = json_decode(file_get_contents('https://api.chucknorris.io/jokes/random'));
        $joke->comments = JokeComment::where('joke_id', $joke->id)->get();
        return response()->json($joke);
    }
}
