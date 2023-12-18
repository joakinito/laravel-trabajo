<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateId
{

    public function handle($request, Closure $next, $parameterName = 'id')
    {
        $id = $request->route($parameterName);

        if (!is_numeric($id) || $id <= 0) {
            return response()->json([
                'success' => false,
                'message' => "El $parameterName de la ruta debe ser un número entero positivo."
            ], 400);
        }

        return $next($request);
    }
}