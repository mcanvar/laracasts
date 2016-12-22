<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes()
    {
      return $this->hasMany(Note::class);
    }

    public function path()
    {
      return '/cards/' . $this->id;
    }

    public function addNote(Note $note, $userId)
    {
      $note->user_id = $userId;
      $this->notes()->save($note);
    }
}
