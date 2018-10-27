
    <form action="{{route('postForm')}}" method="post">
      {{csrf_field()}} //
  <input type="text" name="uname">
  <br>
  <input type="text" name="email">
  <button type="submit">Login</button>
  </form>
