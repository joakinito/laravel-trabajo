<?php

namespace App\Http\Controllers;

use App\Models\Streamer;
use Illuminate\Http\Request;

class StreamerController extends Controller
{
    public function indexStreamers()
    {

        $rubius = Streamer::all();

        return response([
            'success' => true,
            'message' => 'streamers',
            'data' => $rubius,
        ]);
    }
    public function showStreamer(string $id)
    {
        $vegetitta = Streamer::findOrFail($id);

        return response([
            'success' => true,
            'message' => 'Estretretremer',
            'data' => $vegetitta,
        ]);
    }
}
