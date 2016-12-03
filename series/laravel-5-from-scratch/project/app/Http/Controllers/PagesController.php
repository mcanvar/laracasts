<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
          $people = ['Mevlut', 'Simge', 'Esra'];
          return view('welcome')->withPeople($people);
    }
}
