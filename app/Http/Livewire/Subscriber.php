<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Subscriber as Subscribe ;
class Subscriber extends Component
{
    public $email;
    public function render()
    {
        return view('livewire.subscriber');
    }

   public function addToSubscribe(Request $request){
    Subscribe::create([
        'email'=>$this->email,
    ]);

    session()->flash('message', 'subscribe successfully added.');


   }
}
