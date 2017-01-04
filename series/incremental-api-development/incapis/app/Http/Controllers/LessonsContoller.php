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
            'data' => $this->transformCollection($lessons)
        ]);
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            return response()->json([
                'error' => [
                    'message' => 'Lesson does not exists.'
                ]
            ]);
        }

        return response()->json([
            'data' => $this->transform($lesson->toArray())
        ]);
    }

    private function transformCollection($lessons)
    {
        return array_map([$this, 'transform'], $lessons->toArray());
    }

    private function transform($lesson)
    {
        return [
            'title' => $lesson['title'],
            'body' => $lesson['body'],
            'active' => (boolean)$lesson['status']
        ];
    }
}
