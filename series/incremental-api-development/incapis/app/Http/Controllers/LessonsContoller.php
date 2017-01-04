<?php

namespace App\Http\Controllers;

use App\Transformers\LessonTransformer;
use App\Lesson;
use Illuminate\Http\Request;

class LessonsContoller extends ApiController
{
    protected $lessonTransformer;

    /**
     * LessonsContoller constructor.
     * @param $lessonTransformer
     */
    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;

        $this->middleware('auth.basic', ['only' => 'store']);
    }


    public function index()
    {
//        1. All is bad.
//        2. No way to attch metadata.
//        3. Linking structure.
//        4. No way to signal headers/response codes.

        $lessons = Lesson::all();

        return $this->respond([
            'data' => $this->lessonTransformer->transformCollection($lessons->all())
        ]);
    }

    public function show($id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            return $this->respondNotFound('Lesson does not exists.');
        }

        return $this->respond([
            'data' => $this->lessonTransformer->transform($lesson->toArray())
        ]);
    }

    public function store(Request $request)
    {
        if (!$request->has('title') or !$request->has('body'))
        {
            return $this->respondUnprocessableEntity('Parameters failed validation for a lesson');
        }

        Lesson::create($request->all());

        return $this->respondCreated('Lesson successfully created.');
    }
}