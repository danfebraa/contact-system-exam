@extends("layout.app")
@section("content")
<form action="{{route('contacts.store')}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="company">Company</label>
    <input type="text" id="company" name="company" value="{{ old('company') }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">Email Address</label>
    <input type="text" id="email" name="email" value="{{ old('email') }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone">
    @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <button type="submit">Add Contact</button>
</form>
@endsection
