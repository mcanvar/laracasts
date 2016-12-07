@extends('layout')

@section('content')
  <h1>Card:</h1>
  <h3>{{ $card->title }}</h3>

  <ul>
    @foreach ($card->notes as $note)
        <li>{{ $note->body }}</li>
    @endforeach
  </ul>
@stop
