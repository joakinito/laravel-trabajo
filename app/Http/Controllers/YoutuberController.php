<?php

namespace App\Http\Controllers;

use App\Models\Youtuber;
use Illuminate\Http\Request;

class YoutuberController extends Controller
{
    public function indexYoutubers()
    {

        $wili = Youtuber::all();

        return response([
            'success' => true,
            'message' => 'Youtubersssssss',
            'data' => $wili,
        ]);
    }
    public function showYoutuber(string $id)
    {
        $staxx = Youtuber::findOrFail($id);

        return response([
            'success' => true,
            'message' => 'Youtututuber',
            'data' => $staxx,
        ]);
    }
}