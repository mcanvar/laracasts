<?php

use App\Lesson;

class LessonTest extends ApiTestCase
{
    public function test_it_fetches_lessons()
    {
        $this->times(3)->make(Lesson::class);

        $this->getJson('api/v1/lessons');

        $this->assertResponseOk();
    }

    public function test_it_fetches_single_lesson()
    {
        $this->times(1)->make(Lesson::class);

        $this->get('api/v1/lessons/2')->seeJsonStructure([
            'data' => [
                'title',
                'body',
                'active'
            ]
        ]);

        $this->assertResponseOk();
    }

    public function test_it_creates_a_new_lesson_given_valid_parameters()
    {
        if($this->authenticate($this->getFirstUser()))
        {
            $this->post('api/v1/lessons', $this->generate(Lesson::class))->seeJsonEquals([
                'message' => 'Lesson successfully created.'
            ]);
        }

        $this->assertResponseStatus(201);
    }

    public function test_it_throws_a_422_if_a_new_lesson_request_fails_validation()
    {
        if($this->authenticate($this->getFirstUser()))
        {
            $this->post('api/v1/lessons');
        }

        $this->assertResponseStatus(422);
    }

    public function test_it_404S_if_a_lesson_is_not_found()
    {
        $this->getJson('api/v1/lessons/x');

        $this->assertResponseStatus(404);
    }
}
