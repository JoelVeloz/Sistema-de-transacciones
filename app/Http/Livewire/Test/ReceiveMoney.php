<?php

namespace App\Http\Livewire\Test;

use Livewire\Component;

class ReceiveMoney extends Component
{

    public $open = false;

    public function abrir()
    {
        $this->open = true;
    }


    public function render()
    {
        return view('livewire.test.receive-money');
    }
}
