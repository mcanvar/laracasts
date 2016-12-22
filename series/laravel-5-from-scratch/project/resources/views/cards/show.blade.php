@extends('layout')

@section('content')
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      <h1>Card: {{ $card->title }}</h1>

      <ul class="list-group">
        @foreach ($card->notes as $note)
            <li class="list-group-item">
              {{ $note->body }}
              <span class="label label-default">{{ $note->user->username }}</span>
              <a href="/notes/{{ $note->id }}/edit" class="pull-right">edit</a>
            </li>
        @endforeach
      </ul>

      <h3>Add new note:</h3>
      <form method="POST" action="{{ $card->id }}/notes">
        <div class="form-group">
          <textarea name="body" class="form-control">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>

    @if(count($errors))
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif

    </div>
  </div>
@stop
