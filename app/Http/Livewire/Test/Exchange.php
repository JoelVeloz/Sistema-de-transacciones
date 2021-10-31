<?php

namespace App\Http\Livewire\Test;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Exchange extends Component
{
    public $from  = "";
    public $to  = "";

    public function fromData($from)
    {
        $this->from = $from;
    }
    public function toData($to)
    {
        $this->to = $to;
    }

    public function cambiar()
    {
        dd($this->from . "/" . $this->to);
    }



    public function render()
    {
        $currencies =   config("wallet.currencies");
        $user = Auth::user();
        $wallets = $user->wallets;
        return view('livewire.test.exchange', compact("wallets", "currencies"));
    }
}
