@extends('layout')

@section('content')

  @if (empty($people))
    There is no people.
  @endif

  @unless (empty($people))
    There is some people.
  @endunless

  @foreach ($people as $person)
      <li>{{ $person }}</li>
  @endforeach
@stop
