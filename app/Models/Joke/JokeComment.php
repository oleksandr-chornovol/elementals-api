<?php

namespace App\Models\Joke;

use Illuminate\Database\Eloquent\Model;

class JokeComment extends Model
{
    protected $fillable = [
        'id',
        'joke_id',
        'text'
    ];
}
