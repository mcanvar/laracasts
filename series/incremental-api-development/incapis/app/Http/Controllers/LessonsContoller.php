<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonsContoller extends Controller
{
    public function index()
    {
//        1. All is bad.
//        2. No way to attch metadata.
//        3. Linking structure.
//        4. No way to signal headers/response codes.

        $lessons = Lesson::all();

        return response()->json([
            'data' => $lessons->toArray()
        ], 200);
    }
}
