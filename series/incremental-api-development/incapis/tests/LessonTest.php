<?php

class LessonTest extends ApiTester
{
    public function test_it_fetches_lessons()
    {
        $this->makeLesson();

        $this->getJson('api/v1/lessons');

        $this->assertResponseOk();
    }

    public function test_it_fetches_single_lesson()
    {
        $this->get('api/v1/lessons/2')->seeJsonStructure([
            'data' => [
                'title',
                'body',
                'active'
            ]
        ]);

        $this->assertResponseOk();
    }

    public function test_it_404S_if_a_lesson_is_not_found()
    {
        $this->getJson('api/v1/lessons/x');

        $this->assertResponseStatus(404);
    }

    private function makeLesson()
    {
        factory(App\Lesson::class)->create();
    }
}
