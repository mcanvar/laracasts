@if(Session::has('f_message'))
  <div class="alert alert-{{ Session::get('f_message_level') }}">
    {{ Session::get('f_message') }}
  </div>
@endif
