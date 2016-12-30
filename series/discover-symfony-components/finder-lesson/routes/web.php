<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Symfony\Component\Finder\Finder;

Route::get('/', function () {

  // $files = Finder::create()->in(app_path());

  // $files = Finder::create()->in(app_path())->name('*.txt');

  // $files = Finder::create()
  //   ->in(app_path())
  //   ->name('*.txt')
  //   ->notContains('{key}');

  // $files = Finder::create()
  //   ->in(app_path())
  //   ->name('*.txt')
  //   ->contains('{key}');

  $files = Finder::create()
    ->in(app_path())
    ->name('*.txt')
    ->contains('{key}');

  // foreach ($files as $file) {
  //   var_dump($file->getRealPath());
  // }


  // foreach ($files as $file) {
  //   $content = File::get($file->getRealPath());
  //   var_dump($content);
  // }


  foreach ($files as $file) {
    $content = File::get($file->getRealPath());

    $updated = str_replace('{key}', '{updated}', $content);

    File::put($file->getRealPath(), $updated);

    var_dump($content);
  }

});
