<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
      $this->validate($request, [
        'body' => ['required', 'min:10']
      ]);

      $note = new Note();
      $note->body = $request->body;

      $card->addNote($note, 1) ;

      return back();
    }

    public function edit(Note $note)
    {
      return view('notes.edit')->withNote($note);
    }

    public function update(Request $request, Note $note)
    {
      $note->update($request->all());

      return back();
    }
}
