<?php

use App\Lesson;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::truncate();
        $this->call(LessonsTableSeeder::class);
        User::truncate();
        $this->call(UsersTableSeeder::class);
    }
}
