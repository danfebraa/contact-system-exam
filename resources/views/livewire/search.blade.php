<div>
  <input type="text" wire:model="searchTerm" class="form-control" placeholder="Search"/>
  {{$contacts->onEachSide(1)->links()}}
  <table class="table">
      <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Company</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>
          <th scope="col">Actions</th>
      </tr>
      </thead>
      <tbody>
      @foreach($contacts as $contact)
          <tr>
              <th scope="row">{{$contact->id}}</th>
              <td>{{$contact->name}}</td>
              <td>{{$contact->company}}</td>
              <td>{{$contact->phone}}</td>
              <td>{{$contact->email}}</td>
              <td>
                <a class="btn btn-secondary btn-sm btn-block" href="{{route('contacts.show', $contact)}}">Update</a>
                <form action="{{ route('contacts.destroy' , $contact ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm btn-block">Delete Employee</button>
                </form>
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>
