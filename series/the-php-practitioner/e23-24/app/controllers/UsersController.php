<?php

namespace App\Controllers;

use App\Core\App; 

class UsersController
{
  public function index()
  {
    $visitors = App::get('database')->getAll('visitors');

    return view('users', compact('visitors'));
  }

  public function store()
  {
    if(isset($_POST['name']))
    {
      App::get('database')->insert('visitors', ['name' => $_POST['name']]);
      echo 'You type ' . $_POST['name'] . ' and it is succesfully inserted!';
    }
    else
    {
        echo 'The post request could not succeed!';
    }

    return redirect('users');
  }
}
