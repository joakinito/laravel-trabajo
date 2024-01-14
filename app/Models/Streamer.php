<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Streamer extends Model
{
    protected $fillable = [
        'name',
        'platform',
        'esland_id',
    ];

    // Relación inversa 1:N con Esland
    public function esland()
    {
        return $this->belongsTo(Esland::class);
    }

    // Otros métodos y lógica aquí...
}
