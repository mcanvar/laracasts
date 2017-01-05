<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Tag;
use App\Transformers\TagTransformer;
use Illuminate\Http\Request;

class TagsController extends ApiController
{
    protected $tagsTransformer;

    public function __construct(TagTransformer $tagsTransformer)
    {
        $this->tagsTransformer = $tagsTransformer;
    }

    public function index($lessonId = null)
    {
        $tags = $this->getTags($lessonId);
        return $this->respond([
            'data' => $this->tagsTransformer->transformCollection($tags->toArray())
            ]);
    }

    protected function getTags($lessonId)
    {
        return $lessonId ? Lesson::findOrFail($lessonId)->tags : Tag::all();
    }
}
