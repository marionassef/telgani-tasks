<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getTitles(Request $request): JsonResponse
    {
        // TODO

        return response()->json([]);
    }
}
