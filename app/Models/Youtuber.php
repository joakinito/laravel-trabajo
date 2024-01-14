<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtuber extends Model
{
    protected $fillable = [
        'name',
        'channel_name',
        'esland_id',
    ];

    // Relación inversa 1:N con Esland
    public function esland()
    {
        return $this->belongsTo(Youtuber::class);
    }
}
