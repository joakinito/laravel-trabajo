<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Esland;

class SlandController extends Controller
{
    public function indexEslands()
    {

        $eslands = Esland::all();

        return response([
            'success' => true,
            'message' => 'Eslands',
            'data' => $eslands,
        ]);
    }
    public function showEsland(string $id)
    {

        $esland = Esland::findOrFail($id);
        $streamers = $esland->streamers;
        $youtubers = $esland->youtubers;

        $response = [
            'success' => true,
            'message' => 'Esland MaMaBicho bruuu',
            'data' => [
                'esland' => [
                    'id' => $esland->id,
                    'name' => $esland->name,
                    'description' => $esland->description,
                    'created_at' => $esland->created_at,
                    'updated_at' => $esland->updated_at,
                ],
                'streamers' => $streamers,
                'youtubers' => $youtubers,
            ],
        ];

        return response($response);
    }

    public function insertEsland(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $esland = Esland::create($data);

        return response([
            'success' => true,
            'message' => 'Esland insertado exitosamente',
            'data' => $esland,
        ]);
    }

    public function deleteEsland(string $id)
    {
        $esland = Esland::findOrFail($id);
        $esland->delete();

        return response([
            'success' => true,
            'message' => 'Esland eliminado exitosamente',
        ]);
    }
}


