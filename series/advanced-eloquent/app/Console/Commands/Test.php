<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test {no}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        switch ($this->argument('no'))
        {
            case 1:
                Foo::bar();
                break;
            case 2:
                $fooo = new Fooo;
                $fooo->bar();
                break;
        }
    }
}

class Foo {
    public static function bar()
    {
        var_dump('bar');
    }
    public static function __callStatic($method, $parameters)
    {
        var_dump('baar');
    }
}
class Fooo {
    public function bar()
    {
        var_dump('bar');
    }

    public function __call($method, $parameters)
    {
        var_dump('baar');
    }
}