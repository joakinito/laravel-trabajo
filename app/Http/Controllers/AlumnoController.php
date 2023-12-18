<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{



    public function index()
    {
        $alumnos = Alumno::all();
        return response()->json([
            'success' => true,
            'data' => $alumnos
        ]);
    }

    public function show($id)
    {
        $alumno = Alumno::find($id);
        if ($alumno) {
            return response()->json([
                'success' => true,
                'data' => $alumno
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Alumno no encontrado'
            ], 404);
        }
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        if ($alumno) {
            $alumno->delete();
            return response()->json([
                'success' => true,
                'message' => 'Alumno eliminado correctamente'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Alumno no encontrado, no se pudo eliminar'
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'nombre' => 'required|min:4|max:32',
            'telefono' => 'nullable|max:16',
            'edad' => 'nullable|integer',
            'password' => 'required|min:6|max:64',
            'email' => 'required|email|unique:alumnos,email|max:64',
            'sexo' => 'required'
        ]);

        $alumno = new Alumno();
        $alumno->nombre = $params['nombre'];
        $alumno->telefono = $params['telefono'];
        $alumno->edad = $params['edad'];
        $alumno->password = bcrypt($params['password']);
        $alumno->email = $params['email'];
        $alumno->sexo = $params['sexo'];


        $alumno->save();

        return response([
            'success' => true,
            'message' => 'Alumno creado correctamente',
            'data' => $alumno
        ], 201);
    }
    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        if (!$alumno) {
            return response()->json([
                'success' => false,
                'message' => 'Alumno no encontrado'
            ], 404); // Código 404 indica "No encontrado"
        }

        $params = $request->validate([
            'nombre' => 'required|min:4|max:32',
            'telefono' => 'nullable|max:16',
            'edad' => 'nullable|integer',
            'password' => 'required|min:6|max:64',
            'email' => 'required|email|max:64|unique:alumnos,email,' . $id,
            'sexo' => 'required'
        ]);

        $alumno->nombre = $params['nombre'];
        $alumno->telefono = $params['telefono'];
        $alumno->edad = $params['edad'];
        $alumno->password = bcrypt($params['password']);
        $alumno->email = $params['email'];
        $alumno->sexo = $params['sexo'];

        $alumno->save();

        return response()->json([
            'success' => true,
            'message' => 'Alumno modificado correctamente',
            'data' => $alumno
        ]);
    }
}

