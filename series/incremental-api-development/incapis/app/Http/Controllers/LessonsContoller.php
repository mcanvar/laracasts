<?php

namespace App\Http\Controllers;

use App\Transformers\LessonTransformer;
use App\Lesson;
use Illuminate\Http\Request;

class LessonsContoller extends Controller
{
    protected $lessonTransformer;

    /**
     * LessonsContoller constructor.
     * @param $lessonTransformer
     */
    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
    }


    public function index()
    {
//        1. All is bad.
//        2. No way to attch metadata.
//        3. Linking structure.
//        4. No way to signal headers/response codes.

        $lessons = Lesson::all();

        return response()->json([
            'data' => $this->lessonTransformer->transformCollection($lessons->toArray())
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
            'data' => $this->lessonTransformer->transform($lesson->toArray())
        ]);
    }
}
