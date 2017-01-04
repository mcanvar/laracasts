<?php

use App\Lesson;
use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory;

class LessonsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessonIds = Lesson::all()->pluck('id')->toArray();
        $tagIds = Tag::all()->pluck('id')->toArray();

        foreach (range(1, 30) as $index)
        {
            DB::table('lessons_tags')->insert([
                'lesson_id' => Factory::create()->randomElement($lessonIds),
                'tag_id' => Factory::create()->randomElement($tagIds)
            ]);
        }
    }
}
