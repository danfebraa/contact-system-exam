@extends("layout.app")



@section("content")
<a href="{{route('contacts.create')}}" class="btn btn-sm btn-primary">Add new contact</a>
    @livewire('search')
@endsection
