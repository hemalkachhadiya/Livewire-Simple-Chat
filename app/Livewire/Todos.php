<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    
    public $todo = '';

    public $todos = ['who cares'];

    // public function mount(){
    //     $this->todos = [
    //         'Take Out Trash',
    //         'Do Wishes',
    //     ];

    //     $this->todo = 'Type Todo.........';
    // }



    public function add(){
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.todos');
    }
}
