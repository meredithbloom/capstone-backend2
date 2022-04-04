<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

   

    protected $fillable = [
        'title',
        'slug',
        'body',
        'game',
        'rating',
        'game_id',
        'author_id',
        'game_cover',
        'author_username'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
