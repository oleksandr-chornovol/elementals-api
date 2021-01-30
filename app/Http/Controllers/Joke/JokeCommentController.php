<?php

namespace App\Http\Controllers\Joke;

use App\Http\Controllers\Controller;
use App\Models\Joke\JokeComment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JokeCommentController extends Controller
{
    public function store(Request $request)
    {
        return JokeComment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $comment = JokeComment::find($id);
        $comment->update($request->all());
        return $comment;
    }

    public function destroy($id): JsonResponse
    {
        return response()->json(JokeComment::find($id)->delete());
    }
}
