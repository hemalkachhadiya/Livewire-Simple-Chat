<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Counter')]
class Counter extends Component
{
    public $count = 1;

    public function increment($by){
        // if the $by is not asign
        // $this->count++;

        // if the $by is assigned
        $this->count = $this->count + $by;

    }
    public function decrement(){
        if($this->count > 0){
            $this->count--;
        }
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
