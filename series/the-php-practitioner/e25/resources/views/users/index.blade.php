<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Users</title>
  </head>
  <body>
    <h1>All Users</h1>

    @foreach ($users as $user)
      <li>{{$user->name}}</li>
    @endforeach

    <form method="POST" action="/users">
        {{csrf_field()}}
        <p>
          <input type="text" name="name" placeholder="Name">
        </p>
        <p>
          <input type="email" name="email" placeholder="Email">
        </p>
        <p>
          <input type="password" name="password" placeholder="Password">
        </p>
        <button type="submit">Submit</button>
    </form>

  </body>
</html>
