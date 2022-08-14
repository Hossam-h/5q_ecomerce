<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Subscriber as Subscribe;
class Subscriber extends Component
{
    public $email;
    public function render()
    {
        return view('livewire.subscriber');
    }

   public function addToSubscribe(Request $request){

        $subscribe_Ex= Subscribe::where('email',$this->email);

        if( empty($this->email) ){
            return session()->flash('error', 'Email is required');     
            }
            elseif($subscribe_Ex->count()){
            return session()->flash('error_exist', 'Email is Exist'); 

            }else{
                Subscribe::create([
                    'email'=>$this->email,
                ]);
            
            return session()->flash('message', 'subscribe successfully added.');
            }

   }
}