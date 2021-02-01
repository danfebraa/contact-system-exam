@extends("layout.app")
@section("content")
    <form class="" action="/login" method="post">
      @csrf
      <input type="text" placeholder="Email" name="email" value="{{old('email')}}">
      <input type="password" placeholder="Password" name="password">
      <button type="submit">Login</button>
    </form>
@endsection
