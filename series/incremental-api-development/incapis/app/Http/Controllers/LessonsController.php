<?php

namespace App\Http\Controllers;

use App\Transformers\LessonTransformer;
use App\Lesson;
use Illuminate\Http\Request;

class LessonsController extends ApiController
{
    protected $lessonTransformer;

    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;

        $this->middleware('auth.basic', ['only' => 'store']);
    }


    public function index()
    {
//  OK      1. All is bad.
//  OK      2. No way to attch metadata.
//  OK      3. Linking structure.
//  OK      4. No way to signal headers/response codes.

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