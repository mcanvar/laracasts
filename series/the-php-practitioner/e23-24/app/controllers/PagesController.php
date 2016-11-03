<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
  public function home()
  {
    $visitors = App::get('database')->getAll('visitors');

    return view('index', compact($visitors));
  }

  public function about()
  {
    $var = 'Laracasts';

    return view('about');
  }

  public function contact()
  {
      return view('contact');
  }
}
