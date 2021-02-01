@extends("layout.app")
@section("content")
<form action="{{route('contacts.update', $contact)}}" method="post">
  @csrf
  @method('put')
  <label>Name</label>
  <input type="text" class="form-control" name="name" value="{{$contact->name}}">
  <label>Company</label>
  <input type="text" class="form-control" name="company" value="{{$contact->company}}">
  <label>Email</label>
  <input type="text" class="form-control" name="email" value="{{$contact->email}}">
  <label>Phone</label>
  <input type="text" class="form-control" name="phone" value="{{$contact->phone}}">
  <br>
  <button type="submit" class="btn btn-sm btn-primary">Update</button>
</form>
@endsection
