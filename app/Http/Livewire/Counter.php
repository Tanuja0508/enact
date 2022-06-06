<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Post;

 

class Counter extends Component

 {
    use WithFileUploads;
    
  public $count = 0;
  public $photos;
  
  
    public function increment()
     {
        $this->count++;
    }
  
    public function render()
    {
        return view('livewire.counter');
    }
    public function save()
 {
    $validatedData=$this->validate([
            'photos' => 'required', // 1MB Max
        ]);
 
    $this->photos->store('public');
    }
}

