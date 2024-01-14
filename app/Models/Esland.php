<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esland extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];


    public function youtubers()
    {
        return $this->hasMany(Youtuber::class);
    }


    public function streamers()
    {
        return $this->hasMany(Streamer::class);
    }

}
