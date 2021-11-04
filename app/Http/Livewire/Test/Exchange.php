<?php

namespace App\Http\Livewire\Test;

use App\Models\Currency;
use App\Models\RatesTest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Exchange extends Component
{
    public $from  = "";
    public $to  = "";
    public $ammount  = 0;

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
        $cambios =  RatesTest::rateList()["USD"];
        $user1 = Auth::user();
        $from = $user1->getWallet($this->from);
        $to = $user1->getWallet($this->to);
        $transfer = $from->exchange($to, $this->ammount * pow(10, $from->decimal_places), ['rate' => round((1 / $cambios[$this->to]), 2)]);
        // dd($transfer);
        // dd($this->from . "/" . $this->to);
    }



    public function render()
    {
        // $currencies =   config("wallet.currencies");
        $currencies =   Currency::all()->pluck("code")->toArray();
        // dd($currencies);
        $user = Auth::user();
        $wallets = $user->wallets;
        return view('livewire.test.exchange', compact("wallets", "currencies"));
    }
}
