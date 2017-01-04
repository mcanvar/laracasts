<?php

use App\Lesson;
use App\Tag;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $tables =[
        'lessons',
        'tags',
        'lessons_tags',
        'users',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();

        $this->call(LessonsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(LessonsTagsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }

    protected function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach ($this->tables as $tableName)
        {
            DB::table($tableName)->truncate();
        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
