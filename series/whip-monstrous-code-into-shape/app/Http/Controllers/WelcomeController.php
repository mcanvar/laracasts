<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublishPostForm;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function posts(PublishPostForm $form) {
        $form->persist();

        return 'Success!';
    }
}
