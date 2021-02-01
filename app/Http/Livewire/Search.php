<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Auth;
use \App\Models\Contact;
class Search extends Component
{
  use WithPagination;
    public $searchTerm;

    public function render()
    {
        return view('livewire.search', [
          'contacts' => Auth::user()->contacts()->where(function($subQ){
              $subQ->where('name', 'like', '%' .$this->searchTerm . '%');
              $subQ->orWhere('email', 'like', '%' .$this->searchTerm . '%');
          })->paginate(5)
        ]);
    }
}
