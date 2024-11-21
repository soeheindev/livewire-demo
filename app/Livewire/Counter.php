<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increasement(){
        return $this->count++;
    }

    public function decreasement(){
        return $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
